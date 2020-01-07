<?php
    class burger {
        public $nimetus;
        public $sai;
        public $liha;
        public $hind;

        public $lisandid = [];

        public function __construct($nimetus, $sai, $liha, $hind) {
            $this -> nimetus = $nimetus;
            $this -> sai = $sai;
            $this -> liha = $liha;
            $this -> hind = $hind;
        }

        public function lisaLisandid($nimetus, $hind) {
            $lisand = [
                'nimetus' => $nimetus,
                'hind' => $hind
            ];

            array_push($this -> lisandid, $lisand);

            return $this -> lisandid;
        }

        private function kalkuleeriHind($hind) {
            $total = $hind;
            foreach ($this -> lisandid as $lisand) {
                $total += $lisand;
            }

            return $total;
        }

        public function koostaBurger() {
            return 'Sa koostasid burgeri nimega: ' . $this -> nimetus . '<br>Burger on ' . $this -> sai . ' saia ning ' . $this -> liha . ' lihaga.<br>Burgeri maksumuseks on '  . '€';
        }
    }

    $bigMac = new burger('Big Mac', 'Pehme', 'Olemas', '3.50');

    $bigMac -> lisaLisandid('Kurk', '0.2');
    $bigMac -> lisaLisandid('Tomat', '0.7');

    echo '<br>';

    echo $bigMac -> koostaBurger();
?>