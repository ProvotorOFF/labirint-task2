<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['header', 'anounce', 'text', 'tags'];

    //Необязательный метод, так как есть метод родительский метод create но по условию задания его надо было объявить
    public static function createEasy($header="", $anounce="", $text="", $tags="") {
        return self::create(["header" => $header, "anounce" => $anounce, "text" => $text, "tags" => $tags]);
    }

    public function getId() {
        return $this->id;
    }

    public function getPublishDate() {
        return date("d.m.Y h:m:s", strtotime($this->created_at));
    }

    public function getHeader() {
        return $this->header;
    }

    public function setHeader($newHeader) {
        $this->header = $newHeader;
        $this->update(["header" => $newHeader]);
        $this->save;
    }

    public function getAnounce() {
        return $this->anounce;
    }

    public function setAnounce($newAnounce) {
        $this->anounce = $newAnounce;
        $this->update(["anounce" => $newAnounce]);
        $this->save;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($newText) {
        $this->text = $newText;
        $this->update(["text" => $newText]);
        $this->save;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($newTags) {
        $this->tags = $newTags;
        $this->update(["tags" => $newTags]);
        $this->save;
    }

    public static function getNewById(int $id) {
        return Self::find($id);
    }

    public static function searchByHeader($headerPart) {
        return Self::where("header", "LIKE", "%" . $headerPart . "%")->get();
    }
    //Необязательный метод, так как есть метод родительский метод destroy но по условию задания его надо было объявить
    public static function deleteById(int $id) {
         return Self::destroy($id);
    }
}
