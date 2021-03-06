<?php

/**
 * French (France) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['AssetAdmin']['CHOOSEFILE'] = 'Choisir un fichier';
$lang['fr_FR']['AssetAdmin']['DELETEDX'] = '%s fichiers supprimés.%s';
$lang['fr_FR']['AssetAdmin']['FILESREADY'] = 'Fichiers prêts à être chargé';
$lang['fr_FR']['AssetAdmin']['FOLDERDELETED'] = 'Dossier supprimé';
$lang['fr_FR']['AssetAdmin']['FOLDERSDELETED'] = 'Dossiers supprimés';
$lang['fr_FR']['AssetAdmin']['MENUTITLE'] = 'Fichiers & Images';
$lang['fr_FR']['AssetAdmin']['MENUTITLE'] = 'Fichiers & Images';
$lang['fr_FR']['AssetAdmin']['MOVEDX'] = '%s fichiers déplacés';
$lang['fr_FR']['AssetAdmin']['NEWFOLDER'] = 'Nouveau Dossier';
$lang['fr_FR']['AssetAdmin']['NOTEMP'] = 'Il n\'existe pas de dossier temporaire pour les transferts. Veuillez modifier upload_tmp_dir in php.ini.';
$lang['fr_FR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Il n\'y avait rien à charger';
$lang['fr_FR']['AssetAdmin']['NOWBROKEN'] = 'Ces pages ont maintenant des liens cassés:';
$lang['fr_FR']['AssetAdmin']['NOWBROKEN2'] = 'Leurs propriétaires ont été avertis par e-mail et vont corriger ces pages.';
$lang['fr_FR']['AssetAdmin']['SAVEDFILE'] = 'Fichier %s enregistré';
$lang['fr_FR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Enregistrer le nom du dossier';
$lang['fr_FR']['AssetAdmin']['THUMBSDELETED'] = 'Toutes les vignettes inutilisées ont été supprimées';
$lang['fr_FR']['AssetAdmin']['UPLOAD'] = 'Charger Les Fichiers Listés Ci-Dessous';
$lang['fr_FR']['AssetAdmin']['UPLOADEDX'] = '%s fichiers chargés';
$lang['fr_FR']['AssetAdmin_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['AssetAdmin_left.ss']['DELETE'] = 'Supprimer...';
$lang['fr_FR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Supprimer les dossiers sélectionnés';
$lang['fr_FR']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Autoriser le glisser-déposer pour réordonner';
$lang['fr_FR']['AssetAdmin_left.ss']['FOLDERS'] = 'Dossiers';
$lang['fr_FR']['AssetAdmin_left.ss']['GO'] = 'Go';
$lang['fr_FR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Sélectionner les dossiers que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['AssetAdmin_left.ss']['TOREORG'] = 'Pour réorganiser vos dossiers, déplacer les où vous le souhaitez.';
$lang['fr_FR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Choisir une page sur la gauche s\'il vous plaît';
$lang['fr_FR']['AssetAdmin_right.ss']['WELCOME'] = 'Bienvenue à';
$lang['fr_FR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Vous n\'avez pas la permission de charger des fichiers dans ce dossier';
$lang['fr_FR']['AssetTableField']['CAPTION'] = 'Légende';
$lang['fr_FR']['AssetTableField']['CREATED'] = 'Premier chargement';
$lang['fr_FR']['AssetTableField']['DIM'] = 'Dimensions';
$lang['fr_FR']['AssetTableField']['DIMLIMT'] = 'limite les dimensions dans la fenêtre surgissante';
$lang['fr_FR']['AssetTableField']['FILENAME'] = 'Nom du fichier';
$lang['fr_FR']['AssetTableField']['GALLERYOPTIONS'] = 'Options de la galerie';
$lang['fr_FR']['AssetTableField']['IMAGE'] = 'Image';
$lang['fr_FR']['AssetTableField']['ISFLASH'] = 'est un document Flash';
$lang['fr_FR']['AssetTableField']['LASTEDIT'] = 'Dernière modification';
$lang['fr_FR']['AssetTableField']['MAIN'] = 'Principal';
$lang['fr_FR']['AssetTableField']['NOLINKS'] = 'Aucune page ne possède de liens vers ce fichier.';
$lang['fr_FR']['AssetTableField']['OWNER'] = 'Propriétaire';
$lang['fr_FR']['AssetTableField']['PAGESLINKING'] = 'Les pages suivantes ont un lien vers ce fichier :';
$lang['fr_FR']['AssetTableField']['POPUPHEIGHT'] = 'Hauteur de la fenêtre surgissante';
$lang['fr_FR']['AssetTableField']['POPUPWIDTH'] = 'Largeur de la fenêtre surgissante';
$lang['fr_FR']['AssetTableField']['SIZE'] = 'Taille';
$lang['fr_FR']['AssetTableField.ss']['DELFILE'] = 'Supprimer ce fichier';
$lang['fr_FR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Déplacer vers un dossier sur la gauche pour déplacer le fichier';
$lang['fr_FR']['AssetTableField.ss']['EDIT'] = 'Modifier le fichier';
$lang['fr_FR']['AssetTableField.ss']['SHOW'] = 'Montrer le fichier';
$lang['fr_FR']['AssetTableField']['SWFFILEOPTIONS'] = 'Options de fichier SWF';
$lang['fr_FR']['AssetTableField']['TITLE'] = 'Titre';
$lang['fr_FR']['AssetTableField']['TYPE'] = 'Type';
$lang['fr_FR']['AssetTableField']['URL'] = 'URL';
$lang['fr_FR']['CMSMain']['ACCESS'] = 'Accès à \'%s\' (%s)';
$lang['fr_FR']['CMSMain']['ACCESSALLINTERFACES'] = 'Accès à toutes les interfaces du CMS';
$lang['fr_FR']['CMSMain']['CANCEL'] = 'Annuler';
$lang['fr_FR']['CMSMain']['CHOOSEREPORT'] = 'Choisir un rapport...';
$lang['fr_FR']['CMSMain']['COMPARINGV'] = 'Vous comparez actuellement les versions %s et %s';
$lang['fr_FR']['CMSMain']['COPYPUBTOSTAGE'] = 'Voulez-vous vraiment copier le contenu public vers le site brouillon ?';
$lang['fr_FR']['CMSMain']['DELETE'] = 'Supprimer du site brouillon';
$lang['fr_FR']['CMSMain']['DESCREMOVED'] = 'et %s suivants';
$lang['fr_FR']['CMSMain']['EMAIL'] = 'Email';
$lang['fr_FR']['CMSMain']['GO'] = 'Go';
$lang['fr_FR']['CMSMain']['MENUTITLE'] = 'Contenu Du Site';
$lang['fr_FR']['CMSMain']['MENUTITLE'] = 'Contenu du site';
$lang['fr_FR']['CMSMain']['METADESCOPT'] = 'Description';
$lang['fr_FR']['CMSMain']['METAKEYWORDSOPT'] = 'Mots clés';
$lang['fr_FR']['CMSMain']['NEW'] = 'Nouveau';
$lang['fr_FR']['CMSMain']['NOCONTENT'] = 'aucun contenu';
$lang['fr_FR']['CMSMain']['NOTHINGASSIGNED'] = 'Vous n\'avez rien d\'assigné.';
$lang['fr_FR']['CMSMain']['NOWAITINGON'] = 'Vous n\'attendez personne.';
$lang['fr_FR']['CMSMain']['NOWBROKEN'] = 'Les pages suivantes ont maintenant des liens cassés :';
$lang['fr_FR']['CMSMain']['NOWBROKEN2'] = 'Leurs propriétaires ont été avertis par mail et vont corriger ces pages.';
$lang['fr_FR']['CMSMain']['OK'] = 'OK';
$lang['fr_FR']['CMSMain']['PAGEDEL'] = 'Page %d supprimée';
$lang['fr_FR']['CMSMain']['PAGENOTEXISTS'] = 'Cette page n\'existe pas';
$lang['fr_FR']['CMSMain']['PAGEPUB'] = 'Page %d publiée';
$lang['fr_FR']['CMSMain']['PAGESDEL'] = 'Pages %d supprimées';
$lang['fr_FR']['CMSMain']['PAGESPUB'] = '%d pages publiées';
$lang['fr_FR']['CMSMain']['PAGETYPEOPT'] = 'Type de page';
$lang['fr_FR']['CMSMain']['PRINT'] = 'Imprimer';
$lang['fr_FR']['CMSMain']['PUBALLCONFIRM'] = 'Publier chaque page du site en copiant le contenu à partir du site brouillon s\'il vous plaît';
$lang['fr_FR']['CMSMain']['PUBALLFUN'] = 'Fonctionnalité "Tout Publier"';
$lang['fr_FR']['CMSMain']['PUBALLFUN2'] = 'Presser ce boutton fera la même chose que d\'aller sur chaque page et d\'appuer sur "publier".';
$lang['fr_FR']['CMSMain']['PUBPAGES'] = '%d pages publiées';
$lang['fr_FR']['CMSMain']['REMOVED'] = 'Supprimé \'%s\'%s du site public';
$lang['fr_FR']['CMSMain']['REMOVEDFD'] = 'Supprimé du site brouillon';
$lang['fr_FR']['CMSMain']['REMOVEDPAGE'] = '\'%s\' supprimé du site public';
$lang['fr_FR']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Supprimé \'%s\' du site de test';
$lang['fr_FR']['CMSMain']['REPORT'] = 'Rapport';
$lang['fr_FR']['CMSMain']['RESTORED'] = '\'%s\' correctement restauré';
$lang['fr_FR']['CMSMain']['ROLLBACK'] = 'Retourner à cette version';
$lang['fr_FR']['CMSMain']['ROLLEDBACKPUB'] = 'Retour à la version publique. La nouvelle version est #%d';
$lang['fr_FR']['CMSMain']['ROLLEDBACKVERSION'] = 'Retour à la version #%d. La nouvelle version est #%d';
$lang['fr_FR']['CMSMain']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['CMSMain']['SENTTO'] = 'Envoyé à %s %s pour approbation.';
$lang['fr_FR']['CMSMain']['STATUSOPT'] = 'Statut';
$lang['fr_FR']['CMSMain']['TOTALPAGES'] = 'Nombre total de pages :';
$lang['fr_FR']['CMSMain']['VERSIONSNOPAGE'] = 'Page #%d introuvable';
$lang['fr_FR']['CMSMain']['VIEWING'] = 'Vous êtes entrain de voir la version #%s, créée le %s par %s';
$lang['fr_FR']['CMSMain']['VISITRESTORE'] = 'Visiter restorepage/(ID)';
$lang['fr_FR']['CMSMain']['WAITINGON'] = 'Vous attendez que d\'autres personnes travaillent sur ces <b>%d</b> pages.';
$lang['fr_FR']['CMSMain']['WORKTODO'] = 'Vous avez du travail a faire sur ces <b>%d</b> pages.';
$lang['fr_FR']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Impossible de trouver le nom du bouton';
$lang['fr_FR']['CMSMain_dialog.ss']['NOLINKED'] = 'Fonction window.linkedObject non trouvé pour retourner sur la fenêtre principal ';
$lang['fr_FR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Ajouté au site brouillon et pas encore publié';
$lang['fr_FR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Ajouter un critère...';
$lang['fr_FR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Groupe d\'Actions';
$lang['fr_FR']['CMSMain_left.ss']['CHANGED'] = 'modifié';
$lang['fr_FR']['CMSMain_left.ss']['CLOSEBOX'] = 'cliquer pour fermer la fenêtre';
$lang['fr_FR']['CMSMain_left.ss']['COMPAREMODE'] = 'Comparer ( sélectionner 2 versions ci-dessous )';
$lang['fr_FR']['CMSMain_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['CMSMain_left.ss']['DEL'] = 'supprimé';
$lang['fr_FR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Supprimer les pages sélectionnées';
$lang['fr_FR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Supprimé du site brouillon mais toujours sur le site public';
$lang['fr_FR']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Edité sur le site brouillon et pas encore publié';
$lang['fr_FR']['CMSMain_left.ss']['EDITEDSINCE'] = 'Modifié depuis';
$lang['fr_FR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Autoriser le glisser-déposer pour  réordonner';
$lang['fr_FR']['CMSMain_left.ss']['GO'] = 'Go';
$lang['fr_FR']['CMSMain_left.ss']['KEY'] = 'Clé :';
$lang['fr_FR']['CMSMain_left.ss']['NEW'] = 'nouveau';
$lang['fr_FR']['CMSMain_left.ss']['OPENBOX'] = 'cliquer pour ouvrir cette fenêtre';
$lang['fr_FR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Versions des Pages';
$lang['fr_FR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publier les pages sélectionnées';
$lang['fr_FR']['CMSMain_left.ss']['SEARCH'] = 'Chercher';
$lang['fr_FR']['CMSMain_left.ss']['SEARCHTITLE'] = 'Chercher par URL, Titre, Titre de Menu &amp; Contenu';
$lang['fr_FR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Sélectionner les pages que vous voulez changer &amp; puis cliquer sur une action :';
$lang['fr_FR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Afficher seulement les pages modifiées';
$lang['fr_FR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Afficher les versions non publiées';
$lang['fr_FR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Contenu du Site et Structure';
$lang['fr_FR']['CMSMain_left.ss']['SITEREPORTS'] = 'Rapports du Site';
$lang['fr_FR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Avez-vous un message pour votre editeur ?';
$lang['fr_FR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Choisissez une page sur la gauche s\'il vous plaît.';
$lang['fr_FR']['CMSMain_right.ss']['LOADING'] = 'chargement en cours...';
$lang['fr_FR']['CMSMain_right.ss']['MESSAGE'] = 'Message';
$lang['fr_FR']['CMSMain_right.ss']['SENDTO'] = 'Envoyer à';
$lang['fr_FR']['CMSMain_right.ss']['STATUS'] = 'Statut';
$lang['fr_FR']['CMSMain_right.ss']['SUBMIT'] = 'Soumettre pour approbation';
$lang['fr_FR']['CMSMain_right.ss']['WELCOMETO'] = 'Bienvenue dans le ';
$lang['fr_FR']['CMSMain_versions.ss']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['CMSMain_versions.ss']['NOTPUB'] = 'Non publié';
$lang['fr_FR']['CMSMain_versions.ss']['PUBR'] = 'Publieur';
$lang['fr_FR']['CMSMain_versions.ss']['UNKNOWN'] = 'Inconnu';
$lang['fr_FR']['CMSMain_versions.ss']['WHEN'] = 'Quand';
$lang['fr_FR']['CommentAdmin']['ACCEPT'] = 'Accepter';
$lang['fr_FR']['CommentAdmin']['APPROVED'] = 'Commentaire %s validé.';
$lang['fr_FR']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Commentaires approuvés';
$lang['fr_FR']['CommentAdmin']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['CommentAdmin']['COMMENT'] = 'Commentaire';
$lang['fr_FR']['CommentAdmin']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Le commentaire est en attente de modération';
$lang['fr_FR']['CommentAdmin']['DATEPOSTED'] = 'Date du post';
$lang['fr_FR']['CommentAdmin']['DELETE'] = 'Supprimer';
$lang['fr_FR']['CommentAdmin']['DELETEALL'] = 'Tout supprimer';
$lang['fr_FR']['CommentAdmin']['DELETED'] = 'Commentaire %s supprimé.';
$lang['fr_FR']['CommentAdmin']['MARKASNOTSPAM'] = 'Etiqueter comme non spam';
$lang['fr_FR']['CommentAdmin']['MARKEDNOTSPAM'] = 'Commentaire %s étiqueté comme non spam.';
$lang['fr_FR']['CommentAdmin']['MARKEDSPAM'] = 'Commentaire %s étiqueté comme spam.';
$lang['fr_FR']['CommentAdmin']['MENUTITLE'] = 'Commentaires';
$lang['fr_FR']['CommentAdmin']['MENUTITLE'] = 'Commentaires';
$lang['fr_FR']['CommentAdmin']['NAME'] = 'Nom';
$lang['fr_FR']['CommentAdmin']['PAGE'] = 'Page';
$lang['fr_FR']['CommentAdmin']['SPAM'] = 'Spam';
$lang['fr_FR']['CommentAdmin']['SPAMMARKED'] = 'Etiqueter comme spam';
$lang['fr_FR']['CommentAdmin_left.ss']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['CommentAdmin_right.ss']['WELCOME1'] = 'Bienvenue sur le';
$lang['fr_FR']['CommentAdmin_right.ss']['WELCOME2'] = 'gestionnaire de commentaires. Veuillez sélectionner un dossier dans l\'arborescence de gauche.';
$lang['fr_FR']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Approuvé';
$lang['fr_FR']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'En attente de modération';
$lang['fr_FR']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Indésirable';
$lang['fr_FR']['CommentList.ss']['CREATEDW'] = 'Les commentaires sont créés à chaque fois qu\'une des actions suivantes ait effectuée - Publier, Annuler, Soumettre.';
$lang['fr_FR']['CommentList.ss']['NOCOM'] = 'Il n\'y a pas de commentaires sur cette page.';
$lang['fr_FR']['CommentTableField']['FILTER'] = 'Filtre';
$lang['fr_FR']['CommentTableField']['SEARCH'] = 'Recherche';
$lang['fr_FR']['CommentTableField.ss']['APPROVE'] = 'approuver';
$lang['fr_FR']['CommentTableField.ss']['APPROVECOMMENT'] = 'Approuver ce commentaire';
$lang['fr_FR']['CommentTableField.ss']['DELETE'] = 'supprimer';
$lang['fr_FR']['CommentTableField.ss']['DELETEROW'] = 'Supprimer cette ligne';
$lang['fr_FR']['CommentTableField.ss']['EDIT'] = 'éditer';
$lang['fr_FR']['CommentTableField.ss']['HAM'] = 'ham';
$lang['fr_FR']['CommentTableField.ss']['MARKASSPAM'] = 'Marquer ce commentaire comme indésirable';
$lang['fr_FR']['CommentTableField.ss']['MARKNOSPAM'] = 'Marquer ce commentaire comme non-spam';
$lang['fr_FR']['CommentTableField.ss']['NOITEMSFOUND'] = 'Aucun élément trouvé';
$lang['fr_FR']['CommentTableField.ss']['SPAM'] = 'indésirable';
$lang['fr_FR']['ComplexTableField']['CLOSEPOPUP'] = 'Ferme Popup';
$lang['fr_FR']['ComplexTableField']['SUCCESSADD'] = 'Ajouté %s %s %s';
$lang['fr_FR']['ImageEditor.ss']['ACTIONS'] = 'actions';
$lang['fr_FR']['ImageEditor.ss']['ADJUST'] = 'Ajuste';
$lang['fr_FR']['ImageEditor.ss']['APPLY'] = 'appliquer';
$lang['fr_FR']['ImageEditor.ss']['BLUR'] = 'flou';
$lang['fr_FR']['ImageEditor.ss']['BRIGHTNESS'] = 'Luminosité';
$lang['fr_FR']['ImageEditor.ss']['CANCEL'] = 'annuler';
$lang['fr_FR']['ImageEditor.ss']['CONTRAST'] = 'Contraste';
$lang['fr_FR']['ImageEditor.ss']['CROP'] = 'couper';
$lang['fr_FR']['ImageEditor.ss']['CURRENTACTION'] = 'action&nbsp;actuelle';
$lang['fr_FR']['ImageEditor.ss']['EDITFUNCTIONS'] = 'modifier&nbsp;fonctions';
$lang['fr_FR']['ImageEditor.ss']['EFFECTS'] = 'effets';
$lang['fr_FR']['ImageEditor.ss']['EXIT'] = 'quitter';
$lang['fr_FR']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['fr_FR']['ImageEditor.ss']['GREYSCALE'] = 'niveau de gris';
$lang['fr_FR']['ImageEditor.ss']['HEIGHT'] = 'hauteur';
$lang['fr_FR']['ImageEditor.ss']['REDO'] = 'Refaire modification';
$lang['fr_FR']['ImageEditor.ss']['ROT'] = 'tourner';
$lang['fr_FR']['ImageEditor.ss']['SAVE'] = 'enregister&nbsp;image';
$lang['fr_FR']['ImageEditor.ss']['SEPIA'] = 'sepia';
$lang['fr_FR']['ImageEditor.ss']['UNDO'] = 'Annuler modification';
$lang['fr_FR']['ImageEditor.ss']['UNTITLED'] = 'Document Sans Titre';
$lang['fr_FR']['ImageEditor.ss']['WIDTH'] = 'largeur';
$lang['fr_FR']['LeftAndMain']['CHANGEDURL'] = 'URL modifiée en \'%s\'';
$lang['fr_FR']['LeftAndMain']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['LeftAndMain']['FILESIMAGES'] = 'Fichiers et Images';
$lang['fr_FR']['LeftAndMain']['HELP'] = 'Aide';
$lang['fr_FR']['LeftAndMain']['PAGETYPE'] = 'Type de page :';
$lang['fr_FR']['LeftAndMain']['PERMAGAIN'] = 'Vous avez été déconnecté du CMS. Si vous voulez vous reconnecter, entrez un nom d\'utilisateur et un mot de passe ci-dessous.';
$lang['fr_FR']['LeftAndMain']['PERMALREADY'] = 'Désolé, mais vous ne pouvez pas accéder cette partie du CMS. Si vous voulez changer d\'identification, faites le ci-dessous';
$lang['fr_FR']['LeftAndMain']['PERMDEFAULT'] = 'Entrez votre adresse email et votre mot de passe pour accéder au CMS.';
$lang['fr_FR']['LeftAndMain']['PLEASESAVE'] = 'Enregister la page s\'il vous plaît : Cette page ne pouvait pas être actualisée car elle n\'a pas encore été enregistrée.';
$lang['fr_FR']['LeftAndMain']['REPORTS'] = 'Rapports';
$lang['fr_FR']['LeftAndMain']['REQUESTERROR'] = 'Erreur de requête';
$lang['fr_FR']['LeftAndMain']['SAVED'] = 'enregistré';
$lang['fr_FR']['LeftAndMain']['SAVEDUP'] = 'Enregistré';
$lang['fr_FR']['LeftAndMain']['SECURITY'] = 'Sécurité';
$lang['fr_FR']['LeftAndMain']['SITECONTENT'] = 'Contenu du Site';
$lang['fr_FR']['LeftAndMain']['SITECONTENTLEFT'] = 'Contenu du site';
$lang['fr_FR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'C\'est la';
$lang['fr_FR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'version que vous utilisez actuellement, techniquement c\'est une branche CVS';
$lang['fr_FR']['LeftAndMain.ss']['ARCHS'] = 'Site Archivé';
$lang['fr_FR']['LeftAndMain.ss']['DRAFTS'] = 'Site Brouillon';
$lang['fr_FR']['LeftAndMain.ss']['EDIT'] = 'Modifier';
$lang['fr_FR']['LeftAndMain.ss']['EDITINCMS'] = 'Editer cette page dans le CMS';
$lang['fr_FR']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['fr_FR']['LeftAndMain.ss']['LOADING'] = 'Chargement en cours...';
$lang['fr_FR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Connecté en tant que';
$lang['fr_FR']['LeftAndMain.ss']['LOGOUT'] = 'Se Déconnecter';
$lang['fr_FR']['LeftAndMain.ss']['PUBLIS'] = 'Site Public';
$lang['fr_FR']['LeftAndMain.ss']['REQUIREJS'] = 'Le CMS a besoin d\'avoir le JavaScript activé.';
$lang['fr_FR']['LeftAndMain.ss']['SSWEB'] = 'Site Web SilverStripe';
$lang['fr_FR']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Voir la page sur le brouillon du site';
$lang['fr_FR']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Voir la page sur le site de publication';
$lang['fr_FR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Vue de la page :';
$lang['fr_FR']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '%s publié avec succès';
$lang['fr_FR']['LeftAndMain']['STATUSTO'] = 'Statut changé en \'%s\'';
$lang['fr_FR']['LeftAndMain']['TREESITECONTENT'] = 'Contenu du site';
$lang['fr_FR']['MemberList.ss']['FILTER'] = 'Filtrer';
$lang['fr_FR']['MemberList_PageControls.ss']['DISPLAYING'] = 'Afficher';
$lang['fr_FR']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'membre(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'membre(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'membre(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['OF'] = 'de';
$lang['fr_FR']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'membre(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['TO'] = 'à';
$lang['fr_FR']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Voir le(s) premier(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['VIEWLAST'] = 'Voir le(s) dernier(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Voir le(s) suivant(s)';
$lang['fr_FR']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Voir le(s) précédent(s)';
$lang['fr_FR']['MemberList_Table.ss']['EMAIL'] = 'Adresse Email';
$lang['fr_FR']['MemberList_Table.ss']['FN'] = 'Prénom';
$lang['fr_FR']['MemberList_Table.ss']['PASSWD'] = 'Mot de passe';
$lang['fr_FR']['MemberList_Table.ss']['SN'] = 'Nom de famille';
$lang['fr_FR']['MemberTableField']['ADD'] = 'Ajouter';
$lang['fr_FR']['MemberTableField']['ADDEDTOGROUP'] = 'Membre ajouté au groupe';
$lang['fr_FR']['MemberTableField']['ADDINGFIELD'] = 'L\'ajout a échoué';
$lang['fr_FR']['MemberTableField']['ANYGROUP'] = 'Tous les groupes';
$lang['fr_FR']['MemberTableField']['ASC'] = 'Ordre croissant';
$lang['fr_FR']['MemberTableField']['DESC'] = 'Ordre décroissant';
$lang['fr_FR']['MemberTableField']['EMAIL'] = 'E-mail';
$lang['fr_FR']['MemberTableField']['FILTER'] = 'Filtrer';
$lang['fr_FR']['MemberTableField']['FILTERBYGROUP'] = 'Filtrer par groupe';
$lang['fr_FR']['MemberTableField']['FIRSTNAME'] = 'Prénom';
$lang['fr_FR']['MemberTableField']['ORDERBY'] = 'Trié par';
$lang['fr_FR']['MemberTableField']['SEARCH'] = 'Recherche';
$lang['fr_FR']['MemberTableField.ss']['ADDNEW'] = 'Ajouter un nouveau';
$lang['fr_FR']['MemberTableField.ss']['DELETEMEMBER'] = 'Supprimer ce membre';
$lang['fr_FR']['MemberTableField.ss']['EDITMEMBER'] = 'Modifier ce membre';
$lang['fr_FR']['MemberTableField.ss']['SHOWMEMBER'] = 'Afficher ce membre';
$lang['fr_FR']['MemberTableField']['SURNAME'] = 'Nom';
$lang['fr_FR']['ModelAdmin']['ADDBUTTON'] = 'Ajout';
$lang['fr_FR']['ModelAdmin']['ADDFORM'] = 'Complétez cette forme pour ajouter un %s à la base de données.';
$lang['fr_FR']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Sélectionne les colonnes du résultat ';
$lang['fr_FR']['ModelAdmin']['CLEAR_SEARCH'] = 'Efface la recherche';
$lang['fr_FR']['ModelAdmin']['CREATEBUTTON'] = 'Crée  \'%s\'';
$lang['fr_FR']['ModelAdmin']['DELETE'] = 'Supprime';
$lang['fr_FR']['ModelAdmin']['DELETEDRECORDS'] = '%s enregistrements supprimés.';
$lang['fr_FR']['ModelAdmin']['FOUNDRESULTS'] = 'Votre recherche a trouvé %s articles';
$lang['fr_FR']['ModelAdmin']['GOBACK'] = 'Retourner';
$lang['fr_FR']['ModelAdmin']['GOFORWARD'] = 'Suivant';
$lang['fr_FR']['ModelAdmin']['IMPORT'] = 'Importer de CSV';
$lang['fr_FR']['ModelAdmin']['IMPORTEDRECORDS'] = '%s enregistrements importés.';
$lang['fr_FR']['ModelAdmin']['ITEMNOTFOUND'] = 'Je ne peux pas trouver cet article';
$lang['fr_FR']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' chargé pour edition.';
$lang['fr_FR']['ModelAdmin']['NOCSVFILE'] = 'Veuillez choisir un fichier CSV à importer';
$lang['fr_FR']['ModelAdmin']['NOIMPORT'] = 'Rien à importer';
$lang['fr_FR']['ModelAdmin']['NORESULTS'] = 'Votre recherche n\'a abouti à aucun article';
$lang['fr_FR']['ModelAdmin']['SAVE'] = 'Sauvegarde';
$lang['fr_FR']['ModelAdmin']['SEARCHRESULTS'] = 'Cherche résultats';
$lang['fr_FR']['ModelAdmin']['SELECTALL'] = 'Tout sélectionner';
$lang['fr_FR']['ModelAdmin']['SELECTNONE'] = 'ne rien sélectionner';
$lang['fr_FR']['ModelAdmin']['UPDATEDRECORDS'] = '%s enregistrements mis à jour.';
$lang['fr_FR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Colonnes de base de donnée';
$lang['fr_FR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Montre spécification pour %s';
$lang['fr_FR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Relations';
$lang['fr_FR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Spécification pour %s';
$lang['fr_FR']['ModelAdmin_left.ss']['ADDLISTING'] = 'Ajoute la liste';
$lang['fr_FR']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'importe';
$lang['fr_FR']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Listes de recherche';
$lang['fr_FR']['ModelAdmin_right.ss']['WELCOME1'] = 'Bienvenue à %s. Veuillez choisir une des entrées dans le panneau de gauche.';
$lang['fr_FR']['PageComment']['Comment'] = 'Commentaire';
$lang['fr_FR']['PageComment']['COMMENTBY'] = 'Commentaire de \'%s\' sur %s';
$lang['fr_FR']['PageComment']['IsSpam'] = 'Spam?';
$lang['fr_FR']['PageComment']['Name'] = 'Nom de l\'auteur';
$lang['fr_FR']['PageComment']['NeedsModeration'] = 'Besoin de Modération ?';
$lang['fr_FR']['PageComment']['PLURALNAME'] = 'Page des commentaires';
$lang['fr_FR']['PageComment']['SINGULARNAME'] = 'Pages des commentaires';
$lang['fr_FR']['PageCommentInterface']['COMMENTERURL'] = 'L\'URL de votre site Web';
$lang['fr_FR']['PageCommentInterface']['POST'] = 'Post';
$lang['fr_FR']['PageCommentInterface']['SPAMQUESTION'] = 'Question pour la protection anti-spam : %s';
$lang['fr_FR']['PageCommentInterface.ss']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['PageCommentInterface.ss']['NEXT'] = 'suivant';
$lang['fr_FR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Personne n\'a encore commenté cette page.';
$lang['fr_FR']['PageCommentInterface.ss']['POSTCOM'] = 'Envoyer votre commentaire';
$lang['fr_FR']['PageCommentInterface.ss']['PREV'] = 'précédent';
$lang['fr_FR']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'Flux RSS pour tous les commentaires';
$lang['fr_FR']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'flux RSS pour les commentaires de cette page';
$lang['fr_FR']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Voir tous les Commentaires';
$lang['fr_FR']['PageCommentInterface']['YOURCOMMENT'] = 'Commentaires';
$lang['fr_FR']['PageCommentInterface']['YOURNAME'] = 'Votre nom';
$lang['fr_FR']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Question pour la protection anti-spam : %s';
$lang['fr_FR']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Votre commentaire a bien été soumis et est en attente de modération.';
$lang['fr_FR']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Le message que vous avez posté est :';
$lang['fr_FR']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Spam détecté !';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'approuver ce commentaire';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ce commentaire n\'est pas un spam';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ce commentaire est un spam';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Envoyé par';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'supprimer ce commentaire';
$lang['fr_FR']['ReportAdmin']['MENUTITLE'] = 'Rapports';
$lang['fr_FR']['ReportAdmin_left.ss']['REPORTS'] = 'Rapports';
$lang['fr_FR']['ReportAdmin_right.ss']['WELCOME1'] = 'Bienvenue dans le';
$lang['fr_FR']['ReportAdmin_right.ss']['WELCOME2'] = 'Section rapports. Choisir un rapport à gauche s\'il vous plaît';
$lang['fr_FR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Rapports';
$lang['fr_FR']['SecurityAdmin']['ADDMEMBER'] = 'Ajouter un membre';
$lang['fr_FR']['SecurityAdmin']['EDITPERMISSIONS'] = 'Droit d\'édition et adresses IP pour tous les groupes';
$lang['fr_FR']['SecurityAdmin']['MENUTITLE'] = 'Securité';
$lang['fr_FR']['SecurityAdmin']['MENUTITLE'] = 'Sécurité';
$lang['fr_FR']['SecurityAdmin']['NEWGROUP'] = 'Nouveau Groupe';
$lang['fr_FR']['SecurityAdmin']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['SecurityAdmin']['SGROUPS'] = 'Groupes de sécurité';
$lang['fr_FR']['SecurityAdmin_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['SecurityAdmin_left.ss']['DEL'] = 'Supprimer...';
$lang['fr_FR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Supprimer les groupes sélectionnés';
$lang['fr_FR']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Autoriser le glisser-déposer pour réordonner';
$lang['fr_FR']['SecurityAdmin_left.ss']['GO'] = 'Go';
$lang['fr_FR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Groupes de sécurité';
$lang['fr_FR']['SecurityAdmin_left.ss']['SELECT'] = 'Sélectionner les pages que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['SecurityAdmin_left.ss']['TOREORG'] = 'Pour réorganiser votre site, déplacer les pages comme vous le souhaitez.';
$lang['fr_FR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Bienvenue à';
$lang['fr_FR']['SecurityAdmin_right.ss']['WELCOME2'] = 'Section administration de la zone sécurité. Choisir un groupe à gauche s\'il vous plaît.';
$lang['fr_FR']['SideReport']['EMPTYPAGES'] = 'Pages Vides';
$lang['fr_FR']['SideReport']['LAST2WEEKS'] = 'Pages modifiées durant les 2 dernières semaines';
$lang['fr_FR']['SideReport']['REPEMPTY'] = 'Le rapport %s est vide.';
$lang['fr_FR']['SideReport']['TODO'] = 'A faire';
$lang['fr_FR']['StaticExporter']['BASEURL'] = 'Domaine';
$lang['fr_FR']['StaticExporter']['EXPORTTO'] = 'Exporter vers ce dossier';
$lang['fr_FR']['StaticExporter']['FOLDEREXPORT'] = 'Dossier à exporter vers';
$lang['fr_FR']['StaticExporter']['NAME'] = 'Exportation Statique';
$lang['fr_FR']['TableListField_PageControls.ss']['DISPLAYING'] = 'Affichage';
$lang['fr_FR']['TableListField_PageControls.ss']['OF'] = 'de';
$lang['fr_FR']['TableListField_PageControls.ss']['TO'] = 'à';
$lang['fr_FR']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Voir premier';
$lang['fr_FR']['TableListField_PageControls.ss']['VIEWLAST'] = 'Voir dernier';
$lang['fr_FR']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Voir suivant';
$lang['fr_FR']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Voir précédent';
$lang['fr_FR']['ThumbnailStripField']['NOFLASHFOUND'] = 'pas de fichier Flash trouvé';
$lang['fr_FR']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'pas de fichiers Flash trouvé dans';
$lang['fr_FR']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'pas d\'images trouvées';
$lang['fr_FR']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Aucune image trouvée';
$lang['fr_FR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Choisissez un dossier ou cherchez ci-dessus)';
$lang['fr_FR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Vous pouvez accéder le site archivé par ce lien :';
$lang['fr_FR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Vous avez demandé à voir le contenu de notre site le';
$lang['fr_FR']['WaitingOn.ss']['ATO'] = 'assigné à';
$lang['fr_FR']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Gadgets disponibles';
$lang['fr_FR']['WidgetAreaEditor.ss']['INUSE'] = 'Gadgets actuellement utilisés';
$lang['fr_FR']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Actuellement aucun gadget disponible';
$lang['fr_FR']['WidgetAreaEditor.ss']['TOADD'] = 'Pour ajouter un gadget, effectuez un glisser-déposer de la zone de gauche à ici.';
$lang['fr_FR']['WidgetEditor.ss']['DELETE'] = 'Supprimer';

?>