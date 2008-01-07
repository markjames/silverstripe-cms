<?php

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('it_IT', $lang) && is_array($lang['it_IT'])) {
	$lang['it_IT'] = array_merge($lang['en_US'], $lang['it_IT']);
} else {
	$lang['it_IT'] = $lang['en_US'];
}

$lang['it_IT']['AssetAdmin']['CHOOSEFILE'] = 'Scegli file';
$lang['it_IT']['AssetAdmin']['CONTENTMODBY'] = 'Contenuto modificabile da';
$lang['it_IT']['AssetAdmin']['CONTENTUSABLEBY'] = 'Contenuto utilizzabile da';
$lang['it_IT']['AssetAdmin']['CREATED'] = 'Data di caricamento';
$lang['it_IT']['AssetAdmin']['DELETEDX'] = 'Cancellati %s file.%s';
$lang['it_IT']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Cancella miniature non utilizzate';
$lang['it_IT']['AssetAdmin']['DELSELECTED'] = 'Cancella i file selezionati';
$lang['it_IT']['AssetAdmin']['DETAILSTAB'] = 'Dettagli';
$lang['it_IT']['AssetAdmin']['FILENAME'] = 'Nome del file';
$lang['it_IT']['AssetAdmin']['FILESREADY'] = 'File pronti per il caricamento:';
$lang['it_IT']['AssetAdmin']['FILESTAB'] = 'File';
$lang['it_IT']['AssetAdmin']['LASTEDITED'] = 'Ultimo aggiornamento';
$lang['it_IT']['AssetAdmin']['MOVEDX'] = 'Spostati %s file';
$lang['it_IT']['AssetAdmin']['NEWFOLDER'] = 'NuovaCartella';
$lang['it_IT']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Non c\'è niente da caricare';
$lang['it_IT']['AssetAdmin']['NOWBROKEN'] = 'Queste pagine hanno ora collegamenti non funzionanti:';
$lang['it_IT']['AssetAdmin']['ONLYADMINS'] = 'Solo gli amministratori possono caricare %s file';
$lang['it_IT']['AssetAdmin']['OWNER'] = 'Proprietario';
$lang['it_IT']['AssetAdmin']['SAVEDFILE'] = 'Salvato file %s';
$lang['it_IT']['AssetAdmin']['SAVEFOLDERNAME'] = 'Salva il nome della cartella';
$lang['it_IT']['AssetAdmin']['TITLE'] = 'Titolo';
$lang['it_IT']['AssetAdmin']['TOOLARGE'] = '%s è troppo grande (%s). File di questo tipo non possono essere più grandi di %s';
$lang['it_IT']['AssetAdmin']['TYPE'] = 'Tipo';
$lang['it_IT']['AssetAdmin']['UNUSEDFILESTAB'] = 'File inutilizzati';
$lang['it_IT']['AssetAdmin']['UNUSEDFILESTITLE'] = 'File inutilizzati';
$lang['it_IT']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Miniature non utilizzate';
$lang['it_IT']['AssetAdmin']['UPLOAD'] = 'Carica i file elencati di seguito';
$lang['it_IT']['AssetAdmin']['UPLOADEDX'] = 'Caricati %s file';
$lang['it_IT']['AssetAdmin']['UPLOADTAB'] = 'Carica';
$lang['it_IT']['AssetAdmin']['VIEWASSET'] = 'Vedi Asset';
$lang['it_IT']['AssetAdmin']['VIEWEDITASSET'] = 'Vedi/Modifica Asset';
$lang['it_IT']['AssetAdmin_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['AssetAdmin_left.ss']['DELETE'] = 'Cancella';
$lang['it_IT']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Cancella le cartelle selezionate';
$lang['it_IT']['AssetAdmin_left.ss']['FOLDERS'] = 'Cartelle';
$lang['it_IT']['AssetAdmin_left.ss']['GO'] = 'Vai';
$lang['it_IT']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Seleziona le cartelle che vuoi rimuovere e clicca sul pulsante qui sotto';
$lang['it_IT']['AssetAdmin_left.ss']['TOREORG'] = 'Per riorganizzare le tue cartelle, selezionale e spostale dove desideri.';
$lang['it_IT']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['AssetAdmin_right.ss']['WELCOME'] = 'Benvenuto su';
$lang['it_IT']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Non hai i permessi per caricare file in questa cartella.';
$lang['it_IT']['AssetTableField']['CREATED'] = 'Primo inserito';
$lang['it_IT']['AssetTableField']['DIM'] = 'Dimensioni';
$lang['it_IT']['AssetTableField']['FILENAME'] = 'Nome del file';
$lang['it_IT']['AssetTableField']['LASTEDIT'] = 'Ultimo modificato';
$lang['it_IT']['AssetTableField']['NOLINKS'] = 'Questo file non è linkato da nessuna delle pagine.';
$lang['it_IT']['AssetTableField']['OWNER'] = 'Proprietario';
$lang['it_IT']['AssetTableField']['PAGESLINKING'] = 'Le seguenti pagine sono collegate a questo file:';
$lang['it_IT']['AssetTableField']['SIZE'] = 'Dimensione';
$lang['it_IT']['AssetTableField.ss']['DELFILE'] = 'Cancella questo file';
$lang['it_IT']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Portati nella cartella a sinistra per spostare il file';
$lang['it_IT']['AssetTableField']['TITLE'] = 'Titolo';
$lang['it_IT']['AssetTableField']['TYPE'] = 'Tipo';
$lang['it_IT']['BulkLoaderAdmin']['CONFIRMBULK'] = 'Conferma caricamento di massa';
$lang['it_IT']['BulkLoaderAdmin']['CSVFILE'] = 'File CSV';
$lang['it_IT']['BulkLoaderAdmin']['DATALOADED'] = 'Questi dati sono stati caricati in';
$lang['it_IT']['BulkLoaderAdmin']['PRESSCNT'] = 'Premi continua per caricare questi dati in';
$lang['it_IT']['BulkLoaderAdmin']['PREVIEW'] = 'Anteprima';
$lang['it_IT']['BulkLoaderAdmin_left.ss']['BATCHEF'] = 'Funzioni di inserimento di massa';
$lang['it_IT']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'Funzioni';
$lang['it_IT']['BulkLoaderAdmin_preview.ss']['RES'] = 'Risultati';
$lang['it_IT']['CMSLeft.ss']['DELPAGE'] = 'Cancella pagine...';
$lang['it_IT']['CMSLeft.ss']['DELPAGES'] = 'Cancella le pagine selezionate';
$lang['it_IT']['CMSLeft.ss']['GO'] = 'Vai';
$lang['it_IT']['CMSLeft.ss']['NEWPAGE'] = 'Nuova pagina...';
$lang['it_IT']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Seleziona le pagine che vuoi cancellare e clicca il bottone di seguito';
$lang['it_IT']['CMSLeft.ss']['SITECONT'] = 'Contenuto del sito';
$lang['it_IT']['CMSMain']['CANCEL'] = 'Cancella';
$lang['it_IT']['CMSMain']['CHOOSEREPORT'] = '(Scegli un report)';
$lang['it_IT']['CMSMain']['COMPARINGV'] = 'Stai comparando le versioni #%d e #%d';
$lang['it_IT']['CMSMain']['COPYPUBTOSTAGE'] = 'Vuoi veramente copiare il contenuto pubblicato nel sito di stage?';
$lang['it_IT']['CMSMain']['DELETEFP'] = 'Cancella dal sito di pubblicazione';
$lang['it_IT']['CMSMain']['EMAIL'] = 'Email';
$lang['it_IT']['CMSMain']['GO'] = 'Vai';
$lang['it_IT']['CMSMain']['METADESCOPT'] = 'Descrizione';
$lang['it_IT']['CMSMain']['METAKEYWORDSOPT'] = 'Parole chiavi';
$lang['it_IT']['CMSMain']['NEW'] = 'Nuova';
$lang['it_IT']['CMSMain']['NOCONTENT'] = 'nessun contenuto';
$lang['it_IT']['CMSMain']['NOTHINGASSIGNED'] = 'Non c\'è niente assegnato a te.';
$lang['it_IT']['CMSMain']['NOWAITINGON'] = 'Non stai aspettando nessuno.';
$lang['it_IT']['CMSMain']['NOWBROKEN'] = 'Le seguenti pagine hanno ora collegamenti non funzionanti:';
$lang['it_IT']['CMSMain']['NOWBROKEN2'] = 'I rispettivi proprietari sono stati contattati via email e risolveranno i problemi riscontrati in quelle pagine.';
$lang['it_IT']['CMSMain']['OK'] = 'OK';
$lang['it_IT']['CMSMain']['PAGEDEL'] = 'pagina %d cancellata';
$lang['it_IT']['CMSMain']['PAGENOTEXISTS'] = 'Questa pagina non esiste';
$lang['it_IT']['CMSMain']['PAGEPUB'] = 'Pagina %d pubblicata';
$lang['it_IT']['CMSMain']['PAGESDEL'] = 'pagine %d cancellate';
$lang['it_IT']['CMSMain']['PAGESPUB'] = '%d pagine pubblicate';
$lang['it_IT']['CMSMain']['PAGETYPEOPT'] = 'Tipo di pagina';
$lang['it_IT']['CMSMain']['PRINT'] = 'Stampa';
$lang['it_IT']['CMSMain']['PUBALLCONFIRM'] = 'Per favore pubblica ogni singola pagina nel sito, copiando i contenuti in \'stage\' su \'live\'.';
$lang['it_IT']['CMSMain']['PUBALLFUN'] = 'Funzione "Pubblica tutto"';
$lang['it_IT']['CMSMain']['PUBALLFUN2'] = 'Cliccare questo bottone equivale ad accedere a tutte le pagine e cliccare \'pubblica\'. Tale bottone è inteso per essere utilizzato dopo aver apportato modifiche di massa ai contenuti, come nella prima pubblicazione del sito.';
$lang['it_IT']['CMSMain']['PUBPAGES'] = 'Fatto: pubblicate %d pagine';
$lang['it_IT']['CMSMain']['REMOVEDFD'] = 'Cancella dal sito bozza';
$lang['it_IT']['CMSMain']['REMOVEDPAGE'] = 'Rimossa \'%s\' dal sito di pubblicazione';
$lang['it_IT']['CMSMain']['RESTORE'] = 'Ripristina';
$lang['it_IT']['CMSMain']['RESTORED'] = '\'%s\' ripristinato correttamente';
$lang['it_IT']['CMSMain']['ROLLBACK'] = 'Ripristina a questa versione';
$lang['it_IT']['CMSMain']['ROLLEDBACKPUB'] = 'Ripristinata la versione di pubblicazione. Il nuovo numero di versione è #%d';
$lang['it_IT']['CMSMain']['ROLLEDBACKVERSION'] = 'Ripristinata la versione #%d. Il nuovo numero di versione è #%d';
$lang['it_IT']['CMSMain']['SAVE'] = 'Salva';
$lang['it_IT']['CMSMain']['SENTTO'] = 'Inviato a %s %s per l\'approvazione.';
$lang['it_IT']['CMSMain']['STATUSOPT'] = 'Stato';
$lang['it_IT']['CMSMain']['TOTALPAGES'] = 'Pagine totali:';
$lang['it_IT']['CMSMain']['VERSIONSNOPAGE'] = 'Impossibile trovare la pagina #%d';
$lang['it_IT']['CMSMain']['VIEWING'] = 'Stai visualizzando la versione #%d, creata %s';
$lang['it_IT']['CMSMain']['VISITRESTORE'] = 'visita restorepage/(ID)';
$lang['it_IT']['CMSMain']['WAITINGON'] = 'Stai aspettando altre persone per lavorare su queste <b>%d</b> pagine.';
$lang['it_IT']['CMSMain']['WORKTODO'] = 'Hai del lavoro da fare su queste <b>%d</b> pagine.';
$lang['it_IT']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Aggiunto al sito bozza e non ancora pubblicato';
$lang['it_IT']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Aggiungi criterio...';
$lang['it_IT']['CMSMain_left.ss']['BATCHACTIONS'] = 'Azioni di massa';
$lang['it_IT']['CMSMain_left.ss']['CHANGED'] = 'modificato';
$lang['it_IT']['CMSMain_left.ss']['CLOSEBOX'] = 'clicca per chiudere il box';
$lang['it_IT']['CMSMain_left.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['CMSMain_left.ss']['COMPAREMODE'] = 'Modalità confronto';
$lang['it_IT']['CMSMain_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['CMSMain_left.ss']['DEL'] = 'cancellato';
$lang['it_IT']['CMSMain_left.ss']['DELETECONFIRM'] = 'Cancella le pagine selezionate';
$lang['it_IT']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Cancellato dal sito bozza ma ancora nel sito live';
$lang['it_IT']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Modificato nel sito bozza e non ancora pubblicato';
$lang['it_IT']['CMSMain_left.ss']['EDITEDSINCE'] = 'Modificato dal';
$lang['it_IT']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Consenti l\'ordinamento utilizzando il drag &amp; drop';
$lang['it_IT']['CMSMain_left.ss']['GO'] = 'Vai';
$lang['it_IT']['CMSMain_left.ss']['KEY'] = 'Chiave:';
$lang['it_IT']['CMSMain_left.ss']['NEW'] = 'nuovo';
$lang['it_IT']['CMSMain_left.ss']['OPENBOX'] = 'clicca per aprire questo box';
$lang['it_IT']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Cronologia delle modifiche';
$lang['it_IT']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Pubblica le pagine selezionate';
$lang['it_IT']['CMSMain_left.ss']['SEARCH'] = 'Cerca';
$lang['it_IT']['CMSMain_left.ss']['SEARCHTITLE'] = 'Cerca all\'interno degli URL, titoli, titoli dei menu e contenuti';
$lang['it_IT']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Seleziona le pagine che vuoi cambiare &amp; clicca su una azione:';
$lang['it_IT']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Seleziona le pagine che vuoi duplicare, se devono essere incluse le sottopagine, e dove vuoi posizionare i duplicati';
$lang['it_IT']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Visualizza solamente le pagine cambiate';
$lang['it_IT']['CMSMain_left.ss']['SHOWUNPUB'] = 'Visulizza le versioni non pubblicate';
$lang['it_IT']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Contenuto del sito e struttura';
$lang['it_IT']['CMSMain_left.ss']['SITEREPORTS'] = 'Report del sito';
$lang['it_IT']['CMSMain_left.ss']['TASKLIST'] = 'Lista dei compiti da fare';
$lang['it_IT']['CMSMain_left.ss']['WAITINGON'] = 'In attesa';
$lang['it_IT']['CMSMain_right.ss']['ANYMESSAGE'] = 'Hai alcun messaggio per il tuo editor?';
$lang['it_IT']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['CMSMain_right.ss']['LOADING'] = 'caricamento...';
$lang['it_IT']['CMSMain_right.ss']['MESSAGE'] = 'Messaggio';
$lang['it_IT']['CMSMain_right.ss']['SENDTO'] = 'Invia a';
$lang['it_IT']['CMSMain_right.ss']['STATUS'] = 'Stato';
$lang['it_IT']['CMSMain_right.ss']['SUBMIT'] = 'Inviato per l\'approvazione';
$lang['it_IT']['CMSMain_right.ss']['WELCOMETO'] = 'Benvenuto su';
$lang['it_IT']['CMSMain_versions.ss']['AUTHOR'] = 'Autore';
$lang['it_IT']['CMSMain_versions.ss']['NOTPUB'] = 'Non pubblicato';
$lang['it_IT']['CMSMain_versions.ss']['PUBR'] = 'Editore';
$lang['it_IT']['CMSMain_versions.ss']['UNKNOWN'] = 'Sconosciuto';
$lang['it_IT']['CMSMain_versions.ss']['WHEN'] = 'Quando';
$lang['it_IT']['CMSRight.ss']['CHOOSEPAGE'] = 'Per favore scegli una pagina sulla sinistra.';
$lang['it_IT']['CMSRight.ss']['ECONTENT'] = 'Modifica contenuto';
$lang['it_IT']['CMSRight.ss']['WELCOMETO'] = 'Benvenuto su';
$lang['it_IT']['CommentList.ss']['CREATEDW'] = 'I commenti vengono creati ogni qualvolta una delle seguenti azioni viene invocata: Pubblica, Rifiuta, Invia.';
$lang['it_IT']['CommentList.ss']['NOCOM'] = 'Non ci sono commenti in questa pagina.';
$lang['it_IT']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Aggiungi quotazione';
$lang['it_IT']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Cerca quotazioni';
$lang['it_IT']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Cerca risultati';
$lang['it_IT']['ImageEditor.ss']['CANCEL'] = 'cancella';
$lang['it_IT']['ImageEditor.ss']['CROP'] = 'ritaglia';
$lang['it_IT']['ImageEditor.ss']['HEIGHT'] = 'altezza';
$lang['it_IT']['ImageEditor.ss']['REDO'] = 'rifai';
$lang['it_IT']['ImageEditor.ss']['ROT'] = 'ruota';
$lang['it_IT']['ImageEditor.ss']['SAVE'] = 'salva&nbsp;immagine';
$lang['it_IT']['ImageEditor.ss']['UNDO'] = 'annulla';
$lang['it_IT']['ImageEditor.ss']['UNTITLED'] = 'Documento senza titolo';
$lang['it_IT']['ImageEditor.ss']['WIDTH'] = 'larghezza';
$lang['it_IT']['LeftAndMain']['CHANGEDURL'] = 'Cambiato URL in \'%s\'';
$lang['it_IT']['LeftAndMain']['COMMENTS'] = 'Commenti';
$lang['it_IT']['LeftAndMain']['FILESIMAGES'] = 'File & Immagini';
$lang['it_IT']['LeftAndMain']['HELP'] = 'Aiuto';
$lang['it_IT']['LeftAndMain']['NEWSLETTERS'] = 'Newsletter';
$lang['it_IT']['LeftAndMain']['PAGETYPE'] = 'Tipo di pagina:';
$lang['it_IT']['LeftAndMain']['PERMAGAIN'] = 'Sei stato sloggato dal CMS. Se desideri autenticarti nuovamente, inserisci qui sotto nome utente e password.';
$lang['it_IT']['LeftAndMain']['PERMALREADY'] = 'Siamo spiacenti, ma non puoi accedere a questa sezione del CMS. Se desideri autenticarti come qualcun altro, fallo qui sotto.';
$lang['it_IT']['LeftAndMain']['PERMDEFAULT'] = 'Per favore scegli un metodo di autenticazione e inserisci le credenziali per poter accedere al CMS.';
$lang['it_IT']['LeftAndMain']['PLEASESAVE'] = 'Per favore salva la pagina: La stessa potrebbe non venire aggiornata se non si provvede quanto prima a salvarla.';
$lang['it_IT']['LeftAndMain']['REPORTS'] = 'Report';
$lang['it_IT']['LeftAndMain']['REQUESTERROR'] = 'Errore nella richiesta';
$lang['it_IT']['LeftAndMain']['SAVED'] = 'salvato';
$lang['it_IT']['LeftAndMain']['SAVEDUP'] = 'Salvato';
$lang['it_IT']['LeftAndMain']['SECURITY'] = 'Sicurezza';
$lang['it_IT']['LeftAndMain']['SITECONTENT'] = 'Contenuto del sito';
$lang['it_IT']['LeftAndMain']['SITECONTENTLEFT'] = 'Contenuto del sito';
$lang['it_IT']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Questa è la';
$lang['it_IT']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versione che stai utilizzando al momento, tecnicamente è il ramo CVS';
$lang['it_IT']['LeftAndMain.ss']['ARCHS'] = 'Sito archiviato';
$lang['it_IT']['LeftAndMain.ss']['DRAFTS'] = 'Sito bozza';
$lang['it_IT']['LeftAndMain.ss']['EDIT'] = 'Modifica';
$lang['it_IT']['LeftAndMain.ss']['EDITPROFILE'] = 'Profilo';
$lang['it_IT']['LeftAndMain.ss']['LOADING'] = 'Caricamento...';
$lang['it_IT']['LeftAndMain.ss']['LOGGEDINAS'] = 'Autenticato come';
$lang['it_IT']['LeftAndMain.ss']['LOGOUT'] = 'scollegati';
$lang['it_IT']['LeftAndMain.ss']['PUBLIS'] = 'Sito pubblicato';
$lang['it_IT']['LeftAndMain.ss']['SSWEB'] = 'Sito web Silverstripe';
$lang['it_IT']['LeftAndMain.ss']['SWITCHTO'] = 'Trasferisciti su:';
$lang['it_IT']['LeftAndMain.ss']['VIEWPAGEIN'] = 'vista pagina:';
$lang['it_IT']['LeftAndMain']['STATISTICS'] = 'Statistiche';
$lang['it_IT']['LeftAndMain']['STATUSTO'] = 'Stato cambiato a \'%s\'';
$lang['it_IT']['LeftAndMain']['TREESITECONTENT'] = 'Contenuto del sito';
$lang['it_IT']['MemberList']['ADD'] = 'Aggiungi';
$lang['it_IT']['MemberList']['EMAIL'] = 'Email';
$lang['it_IT']['MemberList']['FILTERBYG'] = 'Filtra per gruppo';
$lang['it_IT']['MemberList']['FN'] = 'Nome';
$lang['it_IT']['MemberList']['PASSWD'] = 'Password';
$lang['it_IT']['MemberList']['SEARCH'] = 'Cerca';
$lang['it_IT']['MemberList']['SN'] = 'Cognome';
$lang['it_IT']['MemberList.ss']['FILTER'] = 'Filtro';
$lang['it_IT']['MemberList_Table.ss']['EMAIL'] = 'Indirizzo email';
$lang['it_IT']['MemberList_Table.ss']['FN'] = 'Nome';
$lang['it_IT']['MemberList_Table.ss']['PASSWD'] = 'Password';
$lang['it_IT']['MemberList_Table.ss']['SN'] = 'Cognome';
$lang['it_IT']['MemberTableField']['ADD'] = 'Inserisci';
$lang['it_IT']['MemberTableField']['ADDEDTOGROUP'] = 'Inserito membro al gruppo';
$lang['it_IT']['MemberTableField.ss']['ADDNEW'] = 'Inserisci nuovo';
$lang['it_IT']['MemberTableField.ss']['DELETEMEMBER'] = 'Cancella questo membro';
$lang['it_IT']['MemberTableField.ss']['EDITMEMBER'] = 'Modifica questo membro';
$lang['it_IT']['MemberTableField.ss']['SHOWMEMBER'] = 'Visualizza questo membro';
$lang['it_IT']['NewsletterAdmin']['FROMEM'] = 'Dall\'indirizzo email';
$lang['it_IT']['NewsletterAdmin']['MEWDRAFTMEWSL'] = 'Nuova bozza di newsletter';
$lang['it_IT']['NewsletterAdmin']['NEWLIST'] = 'Nuova mailing list';
$lang['it_IT']['NewsletterAdmin']['NEWNEWSLTYPE'] = 'Nuovo tipo di newsletter';
$lang['it_IT']['NewsletterAdmin']['NEWSLTYPE'] = 'Tipo di newsletter';
$lang['it_IT']['NewsletterAdmin']['PLEASEENTERMAIL'] = 'Per favore inserisci un indirizzo email';
$lang['it_IT']['NewsletterAdmin']['RESEND'] = 'Invia nuovamente';
$lang['it_IT']['NewsletterAdmin']['SAVE'] = 'Salva';
$lang['it_IT']['NewsletterAdmin']['SAVED'] = 'Salvato';
$lang['it_IT']['NewsletterAdmin']['SEND'] = 'Invia...';
$lang['it_IT']['NewsletterAdmin']['SENDING'] = 'Invio e-mail...';
$lang['it_IT']['NewsletterAdmin']['SENTTESTTO'] = 'Inviato test a';
$lang['it_IT']['NewsletterAdmin']['SHOWCONTENTS'] = 'Visualizza contenuti';
$lang['it_IT']['NewsletterAdmin_BouncedList.ss']['EMADD'] = 'Indirizzo email';
$lang['it_IT']['NewsletterAdmin_BouncedList.ss']['HAVEBOUNCED'] = 'Email rifiutate dal server';
$lang['it_IT']['NewsletterAdmin_BouncedList.ss']['NOBOUNCED'] = 'Nessuna email rifiutata dal server';
$lang['it_IT']['NewsletterAdmin_BouncedList.ss']['UNAME'] = 'Nome utente';
$lang['it_IT']['NewsletterAdmin_left.ss']['ADDDRAFT'] = 'Inserisci nuova bozza';
$lang['it_IT']['NewsletterAdmin_left.ss']['ADDTYPE'] = 'Inserisci nuovo tipo';
$lang['it_IT']['NewsletterAdmin_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['NewsletterAdmin_left.ss']['DEL'] = 'Cancella';
$lang['it_IT']['NewsletterAdmin_left.ss']['DELETEDRAFTS'] = 'Cancella le bozze selezionate';
$lang['it_IT']['NewsletterAdmin_left.ss']['GO'] = 'Vai';
$lang['it_IT']['NewsletterAdmin_left.ss']['NEWSLETTERS'] = 'Newsletter';
$lang['it_IT']['NewsletterAdmin_left.ss']['SELECTDRAFTS'] = 'Seleziona le bozze che vuoi rimuovere e clicca il pulsante di seguito';
$lang['it_IT']['NewsletterAdmin_right.ss']['CANCEL'] = 'Cancella';
$lang['it_IT']['NewsletterAdmin_right.ss']['ENTIRE'] = 'Invia all\'intera mailing list';
$lang['it_IT']['NewsletterAdmin_right.ss']['ONLYNOT'] = 'Inviato solamente alle persone a cui non è stata precedentemente inviata';
$lang['it_IT']['NewsletterAdmin_right.ss']['SEND'] = 'Invia newsletter';
$lang['it_IT']['NewsletterAdmin_right.ss']['SENDTEST'] = 'Invia test a';
$lang['it_IT']['NewsletterAdmin_right.ss']['WELCOME1'] = 'Benvenuto su';
$lang['it_IT']['NewsletterAdmin_right.ss']['WELCOME2'] = 'Sezione di amministrazione della newsletter. Per favore scegli una cartella sulla sinistra.';
$lang['it_IT']['NewsletterAdmin_SiteTree.ss']['DRAFTS'] = 'Bozze';
$lang['it_IT']['NewsletterAdmin_SiteTree.ss']['MAILLIST'] = 'Mailing List';
$lang['it_IT']['NewsletterAdmin_SiteTree.ss']['SENT'] = 'Oggetti inviati';
$lang['it_IT']['NewsletterAdmin_UnsubscribedList.ss']['NOUNSUB'] = 'Nessun utente è stato rimosso da questa newsletter.';
$lang['it_IT']['NewsletterAdmin_UnsubscribedList.ss']['UNAME'] = 'Nome utente';
$lang['it_IT']['NewsletterAdmin_UnsubscribedList.ss']['UNSUBON'] = 'Disiscritto da';
$lang['it_IT']['NewsletterList.ss']['CHOOSEDRAFT1'] = 'Per favore seleziona una bozza sulla sinistra, oppure';
$lang['it_IT']['NewsletterList.ss']['CHOOSEDRAFT2'] = 'inseriscine una';
$lang['it_IT']['NewsletterList.ss']['CHOOSESENT'] = 'Per favore scegli un oggetto inviato sulla sinistra.';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['CHANGED'] = 'Numero di dettagli cambiati:';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['IMPORTED'] = 'Nuovi membri importati:';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['IMPORTNEW'] = 'Nuovi membri importati';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['SEC'] = 'secondi';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['SKIPPED'] = 'Record saltati:';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['TIME'] = 'Tempo impiegato:';
$lang['it_IT']['Newsletter_RecipientImportField.ss']['UPDATED'] = 'Membri aggiornati:';
$lang['it_IT']['Newsletter_RecipientImportField_Table.ss']['CONTENTSOF'] = 'Contenuto di';
$lang['it_IT']['Newsletter_RecipientImportField_Table.ss']['NO'] = 'Cancella';
$lang['it_IT']['Newsletter_RecipientImportField_Table.ss']['RECIMPORTED'] = 'Indirizzi importati da';
$lang['it_IT']['Newsletter_RecipientImportField_Table.ss']['YES'] = 'Conferma';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['DATE'] = 'Data';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['EMAIL'] = 'Email';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['FN'] = 'Nome';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['NEWSNEVERSENT'] = 'La newsletter non è mai stata inviata ai seguenti iscritti:';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['RES'] = 'Risultato';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['SENDBOUNCED'] = 'L\'invio ai seguenti indirizzi è stato rifiutato dal server';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['SENDFAIL'] = 'Invio ai seguenti indirizzi fallito';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['SENTOK'] = 'Invio ai seguenti indirizzi avvenuto con successo';
$lang['it_IT']['Newsletter_SentStatusReport.ss']['SN'] = 'Cognome';
$lang['it_IT']['PageComment']['COMMENTBY'] = 'Commento da \'%s\' su %s';
$lang['it_IT']['PageCommentInterface.ss']['COMMENTS'] = 'Commenti';
$lang['it_IT']['PageCommentInterface.ss']['NEXT'] = 'prossimo';
$lang['it_IT']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Nessuno ha aggiunto ancora un commento in questa pagina.';
$lang['it_IT']['PageCommentInterface.ss']['POSTCOM'] = 'Inserisci il tuo commento';
$lang['it_IT']['PageCommentInterface.ss']['PREV'] = 'precedente';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'questo commento non è spam';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'questo commento è spam';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Inserito da';
$lang['it_IT']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'rimuovi questo commento';
$lang['it_IT']['ReportAdmin_left.ss']['REPORTS'] = 'Report';
$lang['it_IT']['ReportAdmin_right.ss']['WELCOME1'] = 'Benvenuto su';
$lang['it_IT']['ReportAdmin_right.ss']['WELCOME2'] = 'Sezione di reporting. Per favore scegli un report specifico sulla sinistra.';
$lang['it_IT']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Report';
$lang['it_IT']['SecurityAdmin']['ADDMEMBER'] = 'Aggiungi membro';
$lang['it_IT']['SecurityAdmin']['ADVANCEDONLY'] = 'Questa sezione è solamente per utenti avanzati. Vedi <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">questa pagina</a> per maggiori informazioni.';
$lang['it_IT']['SecurityAdmin']['NEWGROUP'] = 'Nuovo gruppo';
$lang['it_IT']['SecurityAdmin']['SAVE'] = 'Salva';
$lang['it_IT']['SecurityAdmin']['SGROUPS'] = 'Gruppi di sicurezza';
$lang['it_IT']['SecurityAdmin_left.ss']['CREATE'] = 'Crea';
$lang['it_IT']['SecurityAdmin_left.ss']['DEL'] = 'Cancella';
$lang['it_IT']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Cancella i gruppi selezioni';
$lang['it_IT']['SecurityAdmin_left.ss']['GO'] = 'Vai';
$lang['it_IT']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Gruppi di sicurezza';
$lang['it_IT']['SecurityAdmin_left.ss']['SELECT'] = 'Seleziona le pagine che vuoi cancellare e clicca il pulsante di seguito';
$lang['it_IT']['SecurityAdmin_left.ss']['TOREORG'] = 'Per riorganizzare il tuo sito, seleziona e sposta le pagine ove meglio desideri.';
$lang['it_IT']['SecurityAdmin_right.ss']['WELCOME1'] = 'Benvenuto su';
$lang['it_IT']['SecurityAdmin_right.ss']['WELCOME2'] = 'Sezione di amministrazione della sicurezza. Per favore scegli un gruppo sulla sinistra.';
$lang['it_IT']['SideReport']['EMPTYPAGES'] = 'Pagine vuote';
$lang['it_IT']['SideReport']['LAST2WEEKS'] = 'Pagine modificate nelle ultime 2 settimane';
$lang['it_IT']['SideReport']['REPEMPTY'] = 'Il report %s è vuoto.';
$lang['it_IT']['StaticExporter']['BASEURL'] = 'URL di base';
$lang['it_IT']['StaticExporter']['EXPORTTO'] = 'Esporta in questa cartella';
$lang['it_IT']['StaticExporter']['FOLDEREXPORT'] = 'Cartella dove esportare';
$lang['it_IT']['StaticExporter']['NAME'] = 'Sistema di esportazione statico';
$lang['it_IT']['StaticExporter']['ONETHATEXISTS'] = 'Per favore specifica una cartella esistente';
$lang['it_IT']['StatisticsAdmin_left.ss']['OVERV'] = 'Panoramica';
$lang['it_IT']['StatisticsAdmin_left.ss']['REPTYPES'] = 'Tipi di report';
$lang['it_IT']['StatisticsAdmin_left.ss']['USERS'] = 'Utenti';
$lang['it_IT']['SubmittedFormEmail.ss']['SUBMITTED'] = 'I seguenti dati sono stati inviati al tuo sito web:';
$lang['it_IT']['TaskList.ss']['BY'] = 'da';
$lang['it_IT']['ThumbnailStripField']['NOTAFOLDER'] = 'Questa non è una cartella';
$lang['it_IT']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Scegli una cartella qui sopra)';
$lang['it_IT']['ViewArchivedEmail.ss']['CANACCESS'] = 'Puoi accedere al sito archiviato da questo indirizzo:';
$lang['it_IT']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Hai chiesto di visualizzare il contenuto del nostro sito il';
$lang['it_IT']['WaitingOn.ss']['ATO'] = 'assegnato a';

?>