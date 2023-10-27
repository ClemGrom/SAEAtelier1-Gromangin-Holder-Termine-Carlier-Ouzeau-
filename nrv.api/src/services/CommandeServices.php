<?php

namespace nrv\api\services;

use Exception;
use nrv\api\dto\CommandeDTO;
use nrv\api\entities\Commande;
use nrv\api\entities\Reservation;
use nrv\api\entities\Utilisateur;

class CommandeServices
{
    public function getCommande(string $uuid):CommandeDTO
    {
        return Commande::where('id', '=', $uuid)->firstOrFail()->toDTO();
    }

    public function creerCommande(): CommandeDTO
    {
        $commande = new Commande();
        $commande->id = uniqid();
        $commande->statut = 0;
        $commande->id_utilisateur = $_SESSION['user']['uuid'];
        $commande->save();
        return $commande->toDTO();
    }

    /**
     * @throws Exception
     */
    public function reserverSoiree(int $idS, int $nbp, int $idT): void
    {
        if (!isset($_SESSION['user'])) throw new Exception("Vous devez être connecté pour effectuer une commande");
        $soirser = new SoireeServices();
        $sDTO = $soirser->getSoiree($idS);
        if ($sDTO->nb_reservations < $nbp) {
            throw new Exception("Pas assez de places disponibles");
        }

        if($_SESSION['user']['commande_actuelle'] == null){
            $cDTO = $this->creerCommande();
            $_SESSION['user']['commande_actuelle'] = $cDTO->uuid;
            $user=Utilisateur::where('uuid', '=', $_SESSION['user']['uuid'])->first();
            $user->commande_actuelle = $cDTO->uuid;
            $user->save();
        }

        $cDTO= $this->getCommande($_SESSION['user']['commande_actuelle']);
        $res = new Reservation();
        $res->uuid = uniqid();
        $res->id_commande = $cDTO->uuid;
        $res->id_soiree = $idS;
        $res->type_tarif = $idT;
        $res->nb_places = $nbp;
        $res->save();

    }

}