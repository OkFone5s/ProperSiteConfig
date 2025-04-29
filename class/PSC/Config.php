<?php

namespace PSC {
    class Config {
        private $name = "";
        private $motto = "";
        private $url = "";
        
        public function __constructor($sitename, $sitemotto, $siteurl) {
            $this->name = $sitename;
            $this->motto = $sitemotto;
            $this->url = $siteurl;
        }

        public function Link($endpoint) {
            return $this->url.$endpoint;
        }

        public function Redirect($endpoint) {
            $redir = $this->url.$endpoint;
            header("Location: $redir");
        }

        public function Name() {
            return $this->name;
        }

        public function Motto() {
            return $this->motto;
        }

        public function Rename($sitename) {
            $this->name = $sitename;
        }
        
        public function ChangeMotto($sitemotto) {
            $this->motto = $sitemotto;
        }

        public function ChangeUrl($siteurl) {
            $this->url = $siteurl;
        }
    }  
}