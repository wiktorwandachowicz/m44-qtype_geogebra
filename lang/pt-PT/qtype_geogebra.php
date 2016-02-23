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
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Adicione restrições (condições) para as variáveis.';
$string['addmorevarblanks'] = 'Espaços em branco para {no} mais variável(eis)';
$string['answerinvalid'] = 'A seqüência de resposta na resposta é inválida. Isto não deveria acontecer.';
$string['answermissing'] = 'A resposta na questão está falta. Provavelmente JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['answervar'] = 'Variáveis de classificação automática';
$string['answervar_help'] = 'Para  classificação automática: um nome de um objeto booleano no GeoGebra que é "true" se o aluno resolveu a questão (em parte). Resume todas as notas para todas as variáveis booleanas. A questão é correta se qualquer combinação excede 100, mas deve haver pelo menos uma combinação que resume até exatamente 100. Deixe em branco para a classificação manual.';
$string['applet_advanced_settings'] = 'Advanced Settings...';
$string['constraints'] = 'Restrições (condições)';
$string['constraints_help'] = 'Existem quaisquer restrições para variáveis, como a b, que não poderia ser declarado usando as opções de controle deslizante? Separados por vírgula. Relações suportadas são:... Se precisa de uma igualdade, que tem que usar a mesma variável, ao criar o folha de trabalho  do GeoGebra. Intervalos dinâmicos, ou seja, usando variáveis para seletores min/max não são suportados.';
$string['constraintswrongortoohard'] = '{$a->inequalities} são erradas ou muito difícil de encontrar, nós tentamos (força bruta) {$a->tries} vezes em {$a->time} segundos. Talvez utilize um  melhor método no futuro...';
$string['dragndrop'] = 'Drag and drop a GeoGebra file anywhere on the GeoGebra Applet section';
$string['enable_label_drags'] = 'Enable Dragging of Labels';
$string['enable_right_click'] = 'Enable Right Click, Zooming and Keyboard Editing';
$string['enable_shift_drag_zoom'] = 'Enable Shift-Drag & Zoom';
$string['feedback'] = 'Comentários quando a variável é verdade:';
$string['feedback_help'] = 'O feedback é automaticamente retirado da legenda da variável no aficheiro do  GeoGebra.';
$string['geogebraapplet'] = 'Apliqueta GeoGebra';
$string['getvars'] = 'Obter variáveis que podem ser aleatórias  da apliqueta';
$string['ggbfilemissing'] = 'A seqüência de caracteres base64 na resposta está falta. Provavelmente JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['ggbturl'] = 'URL ou ID de documento GeoGebraTube';
$string['ggbturl_help'] = 'Poderia usar o botão compartilhar em GeoGebraTube e copiar e colar a ligação ou usar o repositório GeoGebraTube. A apliqueta e parâmetros são armazenados na base de dados, a apliqueta não ser recarregado de GeoGebraTube, a menos que solicitado. Também é suportado apenas fornecendo o ID ou compartilhamento de chave da apliqueta.';
$string['ggbxmlmissing'] = 'A seqüência de caracteres XML na resposta está falta. Provavelmente JavaScript não está ativado no navegador ou ocorreu um erro desconhecido';
$string['invalidinequality'] = '{$a} é inválido';
$string['isexercise'] = 'Use GeoGebra-Exercise for checking the question';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Existem quaisquer variáveis que devem ser aleatórias?';
$string['loadapplet'] = '(Re)carregar e mostrar a apliqueta';
$string['loadapplet_help'] = '(Re)carregar a apliqueta de GeoGebraTube e armazenar a nova versão do GeoGebraTube na base  de dados.';
$string['mineqmax'] = 'Min e Max para a aleatoriedade não estão especificados corretamente para a variável 5, ou não especificou min do seletor  e max ou o elemento não é um seletor. Provavelmente tem que corrigir isso no ficheiro do GeoGebra.';
$string['minplusstepgtmax'] = 'Min plus incremento é maior do que o Max para a variável {$a}, provavelmente tem que corrigir isso no seu ficheiro do GeoGebra.';
$string['noappletloaded'] = 'A apliqueta não foi não carregada! Verifique se a URL está correta e se  vê uma apliqueta, depois de escolher uma ligação ou (re)carregar a apliqueta';
$string['nofractionsumeq1'] = 'Pelo menos uma combinação de notas deve somar 100%';
$string['pluginname_help'] = 'Perguntas onde o aluno pode resolver a questão ustilizando o GeoGebra';
$string['pluginnameadding'] = 'Adicionar uma pergunta de GeoGebra';
$string['pluginnameediting'] = 'Editando uma pergunta GeoGebra';
$string['pluginnamesummary'] = 'Uma versão de perguntas calculadas que usa o GeoGebra para mostrar a pergunta e verificar a resposta quando o questionário é realizado.';
$string['randomizedbutnovars'] = 'Seleccionou-se que a questão deveria ser aleatória, mas  não especifica quaisquer variáveis válidos para ser ao acaso.';
$string['randomizedvar'] = 'Variáveis para serem aleatórias';
$string['randomizedvar_help'] = 'Variáveis que devem ser aleatórias (separados por vírgula). Use as opções de controle deslizante no GeoGebra para declarar Min, Max e incremento. Essas variáveis também podem ser usadas no texto pergunta, colocando-os com chaves, por exemplo:{a]';
$string['show_algebra_input'] = 'Show Input Bar';
$string['show_menu_bar'] = 'Show Menu';
$string['show_reset_icon'] = 'Show Icon to Reset Construction';
$string['show_tool_bar'] = 'Show Toolbar';
$string['stepzero'] = 'Incremento é 0 para a variável {$a}; ou  não especificou o incremento do controle deslizante ou o elemento não é de todo um controle deslizante. Provavelmente tem que corrigir isso no seu ficheiro do GeoGebra.';
$string['useafile'] = '... or use a ggb-file';
$string['valuecheckedfor'] = 'Objeto Booleano no GeoGebra que é usada para verificar a correção.';
$string['variablenamewrong'] = 'Uma variável com esse nome não pode ser encontrada no ficheiro do GeoGebra.';
$string['variableno'] = 'Variável{$a}';
$string['variables'] = 'Variáveis';
$string['willbereadfromfile'] = 'Serão lidos do GeoGebra... (ver botão ajuda)';