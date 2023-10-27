<?php

namespace nrv\api\services;

use Exception;
use nrv\api\dto\UtilisateurDTO;
use nrv\api\entities\Utilisateur;
use Ramsey\Uuid\Uuid;

class UtilisateurServices
{
    public function getUtilisateur(string $uuid): UtilisateurDTO
    {
        return Utilisateur::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
    }

    /**
     * @throws Exception
     */
    public function createUser(UtilisateurDTO $utilisateurDTO): void
    {
        if (isset($_SESSION['user'])) throw new \Exception("Vous êtes déjà connecté");
        if (Utilisateur::where('email', '=', $utilisateurDTO->email)->exists()) throw new \Exception("Compte déjà existant");
        if ($utilisateurDTO->email != filter_var($utilisateurDTO->email, FILTER_SANITIZE_EMAIL)) throw new \Exception("Email invalide");
        if ($utilisateurDTO->password != filter_var($utilisateurDTO->password)) throw new \Exception("Mot de passe invalide");

        $utilisateur = new Utilisateur();
        $utilisateur->uuid = Uuid::uuid4()->toString();
        $utilisateur->nom = $utilisateurDTO->nom;
        $utilisateur->prenom = $utilisateurDTO->prenom;
        $utilisateur->email = $utilisateurDTO->email;
        $utilisateur->password = password_hash($utilisateurDTO->password, PASSWORD_DEFAULT);
        $utilisateur->admin = 0;
        $utilisateur->commande_actuelle = null;
        $utilisateur->save();
    }

    public function connexion(string $email, string $password): void
    {
        if (isset($_SESSION['user'])) throw new \Exception("Vous êtes déjà connecté");
        $user = Utilisateur::where('email', '=', $email)->first();
        if (!$user) throw new \Exception("Compte inexistant");
        if (!password_verify($password, $user->password))
            throw new \Exception("Mot de passe incorrect");
        $_SESSION['user'] = $user->toArray();
    }

    public function deconnexion(): void
    {
        unset($_SESSION['user']);
    }

}