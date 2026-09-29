<?php
class Deur {
    private bool $opSlot;
    private bool $deuropening;
    public string $deurNaam;

    public function __construct(string $deurNaam)
    {
        $this->opSlot = true; // De deur is op slot en moet worden geopend met een sleutel
        $this->deuropening = false; // De deur is dicht en moet met de klink worden opengemaakt
        $this->deurNaam = $deurNaam; // De deur krijgt de opgegeven naam uit de parameter
    }

    public function sleutelGebruiken(string $richting): string {
        switch($richting) {
            case "links":
                $this->opSlot = false;
                return "Deur is ontgrendeld";
            case "rechts":
                $this->opSlot = true;
                return "Deur is vergrendeld";
            default:
                return "Onbekende richting voor de sleutel.";
        }
    }

    public function deurOpenen(): string {
        if ($this->opSlot) {
            return "Deur is nog op slot en kan niet open";
        } else {
            $this->deuropening = true;
            return "Deur is geopend!";
        }
    }

    public function doorDeurLopen(): string {
        if ($this->opSlot) {
            return "Voordeur is nog op slot";
        } elseif (!$this->deuropening) {
            return "Je stoot tegen de " . $this->deurNaam . "!";
        } else {
            return "Je bent in je huiskamer!";
        }
    }
}
?>