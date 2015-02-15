<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

    public $template = 'layouts/main';

    /**
     * Главная страница. Также обрабатывает поисковый запрос.
     */
    public function action_index() {
        $searchText = $this->request->post('search_text', null);

        // Если поисковый запрос задан, то считает статистку по нему
        if ($searchText) {
            $this->template->content = $this->_getFilesStat($searchText);
        }
	}

    /**
     * Страница производителей оборудования
     */
    public function action_hardware() {
        if ($this->request->is_ajax()) {
            // В случае ajax-запроса обрабатывает ид переданного производителя
            // и пытается найти его товары
            $producers = Kohana::$config->load('producers');
            $producerId = $this->request->query('id', null);
            $result = array();

            if ($producerId && isset($producers[$producerId])) {
                $result = $producers[$producerId]['products'];
            }

            $this->auto_render = false;
            $this->response->headers('Content-type', 'application/json');
            $this->response->body(json_encode($result));
        } else {
            $this->template->content = View::factory('index/hardware', array('producers' => Kohana::$config->load('producers')));
        }
    }

    /**
     * Производит поиск по файлам запрашиваемого текста и
     * формирует статистику по каждому файлу
     *
     * @param $searchText string  поисковый запрос
     * @return string
     */
    protected function _getFilesStat($searchText) {
        $filesStat = array();
        $searchWords = explode(' ', $searchText);

        $dir = DOCROOT . 'data/';
        $filesList = scandir($dir);

        // Проходит по найденным в директории файлам
        foreach ($filesList as $file) {
            if (in_array($file, array('.', '..'))) {
                continue;
            }

            $pathOfFile = $dir . $file;

            if (file_exists($pathOfFile) && is_readable($pathOfFile)) {
                $filesStat[$file] = 0;
                $handler = @fopen($pathOfFile, 'r');

                if ($handler) {
                    while($fileText = fgets($handler, 4096)) {
                        if (feof($handler)) {
                            fclose($handler);
                            break;
                        }

                        // В цикле берется каждое слово из поискового запроса
                        // и подсчитывается количество соппвпадений в файле
                        foreach ($searchWords as $word) {
                            $filesStat[$file] += substr_count($fileText, ' ' . $word . ' ');
                        }
                    }
                }
            }
        }

        if (!empty($filesStat)) {
            arsort($filesStat, SORT_NUMERIC);
        }

        return View::factory('index/files_stat', array('files' => $filesStat))->render();
    }
}