<?php 
class Cms5d4c4a2c06a44457067042_da7ba9ce34f278de12a9f2857e031051Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
