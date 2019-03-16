<?php
namespace App\Observers;
use App\Noticia;
class NoticiasObserver
{
    use UploadObserverTrait;
    protected $field = 'thumn';
    protected $path = 'noticias/';
    public function creating(Noticia $model)
    {
        $this->sendFile($model);
    }
    public function deleting(Noticia $model)
    {
        $this->removeFile($model);
    }
    public function updating(Noticia $model)
    {
        $this->updateFile($model);
    }
}