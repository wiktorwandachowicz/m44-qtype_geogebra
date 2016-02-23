<?php

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype
 * @subpackage     geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.geogebra.org/license
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Legg til begrensninger (vilkår) til variabler.';
$string['addmorevarblanks'] = 'Mellomrom for {no} flere variabler';
$string['answerinvalid'] = 'Svarstrengen i tilbakemeldingen er ugyldig. Dette bør ikke skje.';
$string['answermissing'] = 'Svaret i tilbakemeldingen mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil kan ha oppstått.';
$string['answervar'] = 'Variabler for automatisk vurdering';
$string['answervar_help'] = 'For automatisk vurdering: Et navn på en boolsk variabel i GeoGebra som er «true» dersom eleven har løst oppgaven (delvis). Denne variabelen summerer opp alle svarandeler for alle boolske variabler. Spørsmålet er riktig om der finnes kombinasjoner av svarandeler som er større enn 100 %. Der bør være minst én kombinasjon av svarandeler der summen overstiger 100 %. La denne variabelen være blank for manuell vurdering.';
$string['applet_advanced_settings'] = 'Advanced Settings...';
$string['constraints'] = 'Begrensninger (vilkår)';
$string['constraints_help'] = 'Er der noen begrensninger for variable, slik som a < b, som kan defineres med innstillingene på glidere? Disse må være adskilte med komma. Eksempler på lovlige vilkår er: <, <=, >, >=. Dersom du har bruk for en likhet (likning) må du bruke den samme variabeIen når du lager arbeidsarket i GeoGebra. Det er ikke mulig å bruke dynamiske grenser, som min og maks for glidere.';
$string['constraintswrongortoohard'] = '{$a->inequalities} are feil eller for vanskelig. Vi prøvde {$a->tries} ganger i {$a->time} sekunder. Kanskje må vi bruke en bedre metode i fremtiden...';
$string['dragndrop'] = 'Drag and drop a GeoGebra file anywhere on the GeoGebra Applet section';
$string['enable_label_drags'] = 'Enable Dragging of Labels';
$string['enable_right_click'] = 'Enable Right Click, Zooming and Keyboard Editing';
$string['enable_shift_drag_zoom'] = 'Enable Shift-Drag & Zoom';
$string['feedback'] = 'Tilbakemelding når variabelen er riktig';
$string['feedback_help'] = 'Tilbakemeldingen er automatisk basert på navnet på variabelen i GeoGebra-fila.';
$string['geogebraapplet'] = 'GeoGebra-applet';
$string['getvars'] = 'Hent variabler som kan få vilkårlige verdier fra applet';
$string['ggbfilemissing'] = 'Base64-strengen i svaret mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil kan ha oppstått.';
$string['ggbturl'] = 'URL eller ID for arbeidsarket i GeoGebraTube';
$string['ggbturl_help'] = 'Du kan enter bruke delingsknappen i GeoGebraTube og kopiere og lime linken, eller du kan bruke lagringsstedet i GeoGebraTube. Appleten og parameterne blir lagret i databasen. Appleten vil ikke bli lastet på ny fra GeoGebraTube med mindre det blir spurt etter dette. Det er også mulig å bare oppgi ID-en eller delingsnøkkelen til appleten.';
$string['ggbxmlmissing'] = 'XML-strengen i svaret mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil oppstod.';
$string['invalidinequality'] = '{$a} er ugyldig';
$string['isexercise'] = 'Use GeoGebra-Exercise for checking the question';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Er der noen variabler som skal få tilfeldige verdier?';
$string['loadapplet'] = 'Last opp (på ny) og vis applet';
$string['loadapplet_help'] = 'Last opp appleten fra GeoGebraTube og lagre den nye versjonen fra GeoGebraTube i databasen.';
$string['mineqmax'] = 'Min og Maks for tilfeldig generering er ikke spesifisert riktig for variabel {$a}. Enter har du ikke definert min og maks for glideren, eller så er ikke dette elementet en glider. Du må trolig korrigere dette i GeoGebra-fila.';
$string['minplusstepgtmax'] = 'Min pluss animasjonstrinnet er større enn Maks for variabel {$a}. Du må trolig rette opp dette i GeoGebra-fila.';
$string['noappletloaded'] = 'Ingen applet ble lastet opp! Seek om URL-en er riktig og se om du kan finne en applet etter å ha valgt en lenke eller etter å ha lastet opp appleten på ny.';
$string['nofractionsumeq1'] = 'Minst én kombinasjon av grader må ha en sum på 100 %';
$string['pluginname_help'] = 'Spørsmål der eleven kan svare ved å bruke GeoGebra';
$string['pluginnameadding'] = 'Legg til et GeoGebra-spørsmål';
$string['pluginnameediting'] = 'Redigering av GeoGebra-spørsmål';
$string['pluginnamesummary'] = 'En type spørsmål som bruker GeoGebra til å vise spørsmålet og til å vurdere om svaret er riktig når testen er tatt.';
$string['randomizedbutnovars'] = 'Du har valgt at spørsmålet skulle inholde tilfeldige elementer, men du har ikke valgt noen elementer som skal ha tilfeldige verdier.';
$string['randomizedvar'] = 'Variable som skal ha tilfeldige verdier';
$string['randomizedvar_help'] = 'Variabler som skal være tilfeldige (og adskilte med komma). Bruk innstillingene på glideren i GeoGebra til å angi Min, Maks og Animasjonstrinn. Diss variablene kan også brukes i spørsmålsteksten ved å ha dem i krøllparenteser, som for eksempel: {a}';
$string['show_algebra_input'] = 'Show Input Bar';
$string['show_menu_bar'] = 'Show Menu';
$string['show_reset_icon'] = 'Show Icon to Reset Construction';
$string['show_tool_bar'] = 'Show Toolbar';
$string['stepzero'] = 'Animasjonstrinnet er 0 for variabelen {$a}. Enter har du ikke definert animasjonstrinnet, eller så er ikke dette elementet en glider. Du må trolig korrigere dette i GeoGebra-fila.';
$string['useafile'] = '... or use a ggb-file';
$string['valuecheckedfor'] = 'Boolske objekter i GeoGebra som blir brukte til å sjekke om noe er riktig.';
$string['variablenamewrong'] = 'En variable med det navnet kunne ikke finnes i GeoGebrafila.';
$string['variableno'] = 'Variabel {$a}';
$string['variables'] = 'Variabler';
$string['willbereadfromfile'] = 'Vil bli lest fra GeoGebra... (se Hjelp)';