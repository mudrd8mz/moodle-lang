<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3.1 (2004052501)


$string['auth_dbdescription'] = 'S to izbiro določite eksterno bazo podatkov za preverjanje veljavnosti uporabnikega imena in gesla. Pri novem računu za portal (moodle) je mono obstoječe podatke iz baze prenesti (prekopirati).';
$string['auth_dbextrafields'] = 'Ta polja so izbirna. Vrednosti polj v portalu lahko vnaprej zapolnite <b>z vrednostmi polj v eksterni bazi</b>. Če pustite polja prazna, bodo vpisane privzete vrednosti. Po prijavi sme uporabnik spreminjati vsa polja.';
$string['auth_dbfieldpass'] = 'Stolpec, ki vsebuje geslo';
$string['auth_dbfielduser'] = 'Stolpec, ki vsebuje uporabniko ime';
$string['auth_dbhost'] = 'Naziv računalnika (podatkovnega strenika)';
$string['auth_dbname'] = 'Naziv (ime) baze podatkov';
$string['auth_dbpass'] = 'Geslo za navedeno uporabniko ime';
$string['auth_dbpasstype'] = 'Določite format uporabljenega gesla. Enkripcija po algoritmu MD5 je koristna za povezovanje z drugimi spletnimi reitvami kot je npr. PostNuke';
$string['auth_dbtable'] = 'Naziv tabele v bazi ';
$string['auth_dbtitle'] = 'Uporaba eksterne baze';
$string['auth_dbtype'] = 'Tip baze podatkov (glej podrobnosti: <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>)';
$string['auth_dbuser'] = 'Uporabniko ime s pravico branja baze';
$string['auth_emaildescription'] = 'Potrjevanje z epoto je privzeti način avtentikacije.  Ko uporabnik vnese novi ime in geslo, portal polje epoto na navedeni naslov. Sporočilo vsebuje vareno povezavo na stran, kjer uporabnik potrdi svoj novi račun. Pri vseh naslednjih prijavah portal preverja ime in geslo v svoji bazi.';
$string['auth_emailtitle'] = 'Na epoti temelječa avtentikacija';
$string['auth_imapdescription'] = 'Veljavnost uporabnikega imena in gesla preveri strenik IMAP.';
$string['auth_imaphost'] = 'Naslov strenika IMAP. Uporabite tevilko IP - ne DNS.';
$string['auth_imapport'] = 'tevilka vrat strenika IMAP (običajno 143 ali 993).';
$string['auth_imaptitle'] = 'Uporabi strenik IMAP';
$string['auth_imaptype'] = 'Tip strenika IMAP.Streniki IMAP lahko uporabljajo različne načine avtentikacije in dogovarjanja.';
$string['auth_ldap_bind_dn'] = 'Če boste uporabljali LDAP, določite uporabnika npr. \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Geslo za LDAP.';
$string['auth_ldap_contexts'] = 'Določite sezname uporabnikov. Sezname ločite s \';\'. Primer: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Če ste izbrali potrjevanje računov preko epote, določite e mesto kreiranja. To mesto mora biti različno od drugih uporabnikov (iz varnostnih razlogov). Tega niza ni potrebno dodajati v spremenljivko ldap_context-variable, saj bo portal samodejno iskal uporabnike na tem mestu.';
$string['auth_ldap_creators'] = 'Seznam skupin uporabnikov, ki smejo kreirati nove predmete (npr.\'cn=teachers,ou=staff,o=myorg\'). Več seznamov ločite s \';\'';
$string['auth_ldap_host_url'] = 'Določite URL LDAP strenika (npr. \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Določite atribute člana skupine (običajno \'member\')';
$string['auth_ldap_search_sub'] = 'Določite vrednost <> 0 kadar ičete uporabnika v podkontekstu.';
$string['auth_ldap_update_userinfo'] = 'Spremeni podatke o uporabniku (ime, priimek, naslov..) na portalu iz strenika LDAP (podrobnosti preslikave na  /auth/ldap/attr_mappings.php)';
$string['auth_ldap_user_attribute'] = 'Atribut za imenovanje/iskanje uporabnika (običajno \'cn\').';
$string['auth_ldap_version'] = 'Verzija protokola LDAP na streniku.';
$string['auth_ldapdescription'] = 'Ta način omogoča avtentikacijo preko strenika LDAP.
                                  Če je vpisano uporabniko ime in geslo veljavno, portal kreira novega uporabnika 
                                  v svoji bazi. Ta modul bere uporabnikove atribute v LDAP in jih napolni v polja portala. 
                                  Pri naslednjih prijavah se preverjajo l ime in geslo.';
$string['auth_ldapextrafields'] = 'Ta polja so izbirna.  Vnaprej prenesene vrednosti iz <b>LDAP polj</b> določite tukajt. <br />Če pustite polja prazna, se nič ne prenese. Vpisane bodo privzete vrednosti.<br />V vsakem primeru bodo uporabniki smeli spreminjati svoje podatke ob naslednjih prijavah.';
$string['auth_ldaptitle'] = 'Uporabi strenik LDAP';
$string['auth_manualdescription'] = 'S tem pristopom uporabniki ne morejo kreirali lastnih računov. Vse račune mora ročno kreirati administrator.';
$string['auth_manualtitle'] = 'Le ročni uporabniki računi';
$string['auth_multiplehosts'] = 'Določite lahko več strenikov(npr. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Veljavnost uporabnikega imena in gesla preveri strenik NNTP.';
$string['auth_nntphost'] = 'Naslov strenika NNTP. Uporabite tevilko IP - ne DNS.';
$string['auth_nntpport'] = 'tevilka vrat strenika NNTP (običajno 119).';
$string['auth_nntptitle'] = 'Uporabi strenik  NNTP.';
$string['auth_nonedescription'] = 'Uporabniki takoj pridobijo uporabniki račun - brez avtentikacije v eksterni bazi in brez potrjevanja z epoto.  Ta pristop ni priporočljiv iz varnostnih in administrativnih razlogov.';
$string['auth_nonetitle'] = 'Brez avtentikacije';
$string['auth_pop3description'] = 'Veljavnost uporabnikega imena in gesla preveri strenik POP3';
$string['auth_pop3host'] = 'Naslov strenika POP3. Uporabite tevilko IP - ne DNS.';
$string['auth_pop3port'] = 'tevilka vrat strenika POP3 (običajno 110).';
$string['auth_pop3title'] = 'Uporabi strenik POP3';
$string['auth_pop3type'] = 'Tip strenika. Če strenik uporablja varnostni certifikat, izberite pop3cert.';
$string['auth_user_create'] = 'Kreiranje uporabnikov omogočeno';
$string['auth_user_creation'] = 'Novi (anonimni) uporabniki smejo kreirati račune na ekstrenih avtentikacijskih virih in jih potrjevati z epoto. Če to dovolite, določite e posebne opcije za kreiranje uporabnikov';
$string['auth_usernameexists'] = 'Izbrano ime e obstaja. Določite novega.';
$string['authenticationoptions'] = 'Izbire avtentikacije';
$string['authinstructions'] = 'Na tem mestu napiite navodila za kreiranje uporabnikih računov. To besedilo se prikae na strani za prijavo.  Če ne napiete navodil, potem bo stran prazna.';
$string['changepassword'] = 'Spremeni geslo URL';
$string['changepasswordhelp'] = 'Določite mesto za obnovo ali spremembo imena/gesla, če ga/ju uporabnik pozabi. Na strani za prijavo se izpie gumb. Če pustite prazno, se gumb ne bo izpisal.';
$string['chooseauthmethod'] = 'Izberite način avtentikacije: ';
$string['guestloginbutton'] = 'Gumb za prijavo gosta';
$string['instructions'] = 'Navodila';
$string['md5'] = 'Enkripcija MD5';
$string['plaintext'] = 'tekst';
$string['showguestlogin'] = 'Gumb za prijavo gosta lahko skrijete ali prikaete na vstopni strani.';

?>
