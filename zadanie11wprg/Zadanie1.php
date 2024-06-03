<?php

class NoweAuto {
    private $model;
    private $cena;
    private $kurs;

    public function __construct($model, $cena, $kurs) {
        $this->model = $model;
        $this->cena = $cena;
        $this->kurs = $kurs;
    }

    public function getModel() {
        return $this->model;
    }

    public function getCena() {
        return $this->cena;
    }

    public function getKurs() {
        return $this->kurs;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }

    public function setKurs($kurs) {
        $this->kurs = $kurs;
    }

    public function ObliczCene() {
        return $this->cena * $this->kurs;
    }
}

class AutoZDodatkami extends NoweAuto {
    private $alarm;
    private $radio;
    private $klimatyzacja;

    public function __construct($model, $cena, $kurs, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cena, $kurs);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function getAlarm() {
        return $this->alarm;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getKlimatyzacja() {
        return $this->klimatyzacja;
    }

    public function setAlarm($alarm) {
        $this->alarm = $alarm;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function setKlimatyzacja($klimatyzacja) {
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene() {
        $basePrice = parent::ObliczCene();
        return $basePrice + ($this->alarm * $this->getKurs()) + ($this->radio * $this->getKurs()) + ($this->klimatyzacja * $this->getKurs());
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    private $procentowaWartosc;
    private $liczbaLat;

    public function __construct($model, $cena, $kurs, $alarm, $radio, $klimatyzacja, $procentowaWartosc, $liczbaLat) {
        parent::__construct($model, $cena, $kurs, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartosc = $procentowaWartosc;
        $this->liczbaLat = $liczbaLat;
    }

    public function getProcentowaWartosc() {
        return $this->procentowaWartosc;
    }

    public function getLiczbaLat() {
        return $this->liczbaLat;
    }

    public function setProcentowaWartosc($procentowaWartosc) {
        $this->procentowaWartosc = $procentowaWartosc;
    }

    public function setLiczbaLat($liczbaLat) {
        $this->liczbaLat = $liczbaLat;
    }

    public function ObliczCene() {
        $cenaSamochoduZDodatkami = parent::ObliczCene();
        $ubezpieczenie = $this->procentowaWartosc * ($cenaSamochoduZDodatkami * ((100 - $this->liczbaLat) / 100));
        return $cenaSamochoduZDodatkami + $ubezpieczenie;
    }
}
?>
