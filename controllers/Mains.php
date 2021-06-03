<?php

class Mains extends Controller {
    /**
     * @return void
     */
    public function index(){
        $i = 0;
        $x = 0;
        $z = 0;
        $this->loadModel('Main');
        $getArticle = $this->Main->getLastThreeArticles();
        $lastArticle = $getArticle[0];

        if (strlen($lastArticle['Content']) > 200){
            $lastArticle['Content'] = substr($lastArticle['Content'], 0, 200)."...";
            $lastArticle['oversize'] = true;
        }

        $llastArticle = $getArticle[1];

        if (strlen($llastArticle['Content']) > 150){
            $llastArticle['Content'] = substr($llastArticle['Content'], 0, 200)."...";
            $llastArticle['oversize'] = true;
        }

        $lllastArticle = $getArticle[2];
        if (strlen($lllastArticle['Content']) > 150){
            $lllastArticle['Content'] = substr($lllastArticle['Content'], 0, 200)."...";
            $lllastArticle['oversize'] = true;
        }

        $getTank = $this->Main->getTank();
        foreach ($getTank as $tank){
            $getTank[$i]['id'] = $i;
            if ($tank['Image'] == NULL || $tank['Image'] == null){
                $getTank[$i]['Image'] = '/public/img/account.svg';
            }
            $i++;
        }
        $getHeal = $this->Main->getHeal();
        foreach ($getHeal as $heal){
            $getHeal[$x]['id'] = $x;
            if ($heal['Image'] == NULL || $heal['Image'] == null){
                $getHeal[$x]['Image'] = '/public/img/account.svg';
            }
            $x++;
        }
        $getDps = $this->Main->getDps();
        foreach ($getDps as $dps){
            $getDps[$z]['id'] = $z;
            if ($dps['Image'] == NULL || $dps['Image'] == null){
                $getDps[$z]['Image'] = '/public/img/account.svg';
            }
            $z++;

        }
        $this->render('index', compact('lastArticle', 'llastArticle', 'lllastArticle', 'getDps', 'getHeal', 'getTank'));
    }
}