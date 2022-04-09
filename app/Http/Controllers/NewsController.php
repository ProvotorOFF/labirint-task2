<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function create() {
        $isError = null;
        if ($_POST) {
            if (News::createEasy(isset($_POST['header']) ? $_POST['header'] : "", isset($_POST['text']) ? $_POST['text'] : "", isset($_POST['anounce']) ? $_POST['anounce'] : "", isset($_POST['tags']) ? $_POST['tags'] : "")) {
                $isError = false;
            } else $isError = true;
        }
        return view('newsCreate', compact(['isError']));
    }

    public function delete() {
        $deleted = false;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            if (News::deleteById(intval($_GET['id']))) {
                $deleted = true;   
            }
        }
        return view('newsList', compact(['deleted']));
    }

    public function newsRender() {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            if ($new = News::getNewById(intval($_GET['id']))) {
                return view('newsTemplate', compact(['new']));
            }
        }
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            if ($news = News::searchByHeader($_GET['q'])) {
                return view('newsTemplate', compact(['news']));
            }
        }
        return view('newsTemplate', compact(['error' => true]));
    }
}
