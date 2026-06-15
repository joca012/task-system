<?php

function getStatusColor($status) {

    switch ($status) {

        case "zakazano":
            return "#ffc107"; // žuto

        case "zavrseno":
            return "#28a745"; // zeleno

        case "propusteno":
            return "#dc3545"; // crveno

        case "todo":
            return "#6c757d"; // sivo

        default:
            return "#6c757d";
    }
}