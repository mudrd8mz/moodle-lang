<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9 + (Build: 20080402) (2007101509)
      // local modifications from http://193.2.123.15/moodle


$string['description'] = '<p>Uporabite lahko strežnik LDAP za nadzor vaših vpisov.  
                          Predvideno je, da drevo LDAP vsebuje skupine, ki se ujemajo s 
                          predmeti in vsaka izmed teh skupin oz. predmetov bo 
                          imela vnose članstva, ki se bodo ujemali z udeleženci.</p>
                          <p>Predvideno je, da so predmeti določeni kot skupine v 
                          LDAP-u, kjer ima vsaka skupina več polj za članstvo 
                          (<em>član</em> ali <em>IDčlana</em>), ki vsebujejo enolično
                          identifikacijo uporabnika.</p>
                          <p>Za uporabo LDAP vpisovanja, <strong>morajo</strong> vaši uporabniki 
                          imeti veljavno polje idštevilke. Skupine LDAP morajo imeti 
                          isto idštevilko oznako v poljih \"Člani\", da je uporabnik vpisan 
                          v predmet.
                          To bo običajno delovalo dobro, če že uporabljate LDAP 
                          preverjanje pristnosti.</p>
                          <p>Vpisi v predmete bodo posodobljeni, ko se uporabnik prijavi. Lahko
                           tudi zaženete skripto, za ohranjanje sinhroniziranih vpisov. Poglejte v 
                          <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
                          <p>Ta vtičnik lahko nastavite za samodejno ustvarjanje novih 
                          predmetov, ko se nova skupina pojavi v LDAP-u.</p>';
$string['enrol_ldap_contexts'] = 'Kontekst LDAP-a';
$string['enrol_ldap_memberattribute'] = 'Atribut člana LDAP';
$string['enrol_ldap_roles'] = 'Preslikava vlog';

?>
