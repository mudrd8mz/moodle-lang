<?PHP // $Id$ 
      // question.php - created with Moodle 1.8 + (2007021502)


$string['adminreport'] = 'Informe sobre posibles problemas en su base de datos de preguntas.';
$string['broken'] = 'Éste es un enlace roto: apunta a un archivo inexistente.';
$string['byandon'] = 'por <em>$a->usuario</em> en <em>$a->hora</em>';
$string['categorycurrent'] = 'Categoría actual';
$string['categorycurrentuse'] = 'Usar esta categoría';
$string['categorymoveto'] = 'Guardar en categoría';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">La categoría \"$a->name\"</a> en curso \"$a->coursename\" cambiará su estatus de intercambio <strong>$a->changefrom a $a->changeto</strong>.';
$string['copy'] = 'Copiar de $a y cambiar los enlaces.';
$string['created'] = 'Creado';
$string['createdmodifiedheader'] = 'Creado / Último guardado';
$string['cwrqpfs'] = 'Preguntas aleatorias seleccionando preguntas de sub-categorías.';
$string['cwrqpfsinfo'] = '<p>Durante la actualización a Moodle 1.9 separaremos las categorías de pregunta en diferentes contextos. Algunas categorías y preguntas de su sitio verán su estatus de intercambio modificado. Esto es necesario en los raros casos en que una o más preguntas aleatorias se seleccionan a partir de una mezcla de categorías compartidas y no compartidas (como sucede en el caso de este sitio). Esto sucede cuando una pregunta aleatoria se ajusta para seleccionar a partir de subcategorías, y una o más subcategorías tienen diferente estatus de intercambio con la categoría padre en la que se crea la pregunta aleatoria.</p>
<p>Las siguientes categorías, de las cuales las preguntas aleatorias de las categorías superiores seleccionan las preguntas, tendrán -en la actualización a Moodle 1.9- su estatus de intercambio modificado al mismo estatus que la categoría que contiene la pregunta aleatoria. Las categorías que aparecen a continuación tendrán su estatus de intercambio modificado. Las preguntas afectadas continuarán funcionando en todos los cuestionarios existentes hasta que usted las elimine de tales cuestionarios.';
$string['cwrqpfsnoprob'] = 'No existen categorías en su sitio afectadas por la opción \'Preguntas aleatorias seleccionando preguntas de subcategorías\'.';
$string['defaultfor'] = 'Valor por defecto para $a';
$string['defaultinfofor'] = 'Categoría por defecto para preguntas compartidas en el contexto $a.';
$string['donothing'] = 'No copie o mueva archivos ni cambie enlaces.';
$string['editingcategory'] = 'Edición de una categoría';
$string['erroraccessingcontext'] = 'No se puede acceder al contexto';
$string['errorfilecannotbecopied'] = 'Error: no se puede copiar el archivo $a.';
$string['errorfilecannotbemoved'] = 'Error: no se puede mover el archivo $a.';
$string['errorfileschanged'] = 'Los archivos de error enlazados desde preguntas han cambiado desde que se ha mostrado el formulario.';
$string['exportcategory'] = 'Exportar categoría';
$string['filesareacourse'] = 'área de archivos del curso';
$string['filesareasite'] = 'área de archivos del sitio';
$string['filestomove'] = '¿Mover / copiar archivos a $a?';
$string['getcategoryfromfile'] = 'Obtener categoría de archivo';
$string['getcontextfromfile'] = 'Obtener contexto de archivo';
$string['ignorebroken'] = 'Pasar por alto enlaces rotos';
$string['linkedfiledoesntexist'] = 'El archivo enlazado $a no existe';
$string['modified'] = 'Último guardado';
$string['move'] = 'Mover desde $a y cambiar enlaces.';
$string['movecategory'] = 'Mover categoría';
$string['movelinksonly'] = 'Limitarse a cambiar el lugar al que apuntan los enlaces, no mover ni copiar archivos.';
$string['moveq'] = 'Mover pregunta(a)';
$string['moveqtoanothercontext'] = 'Mover pregunta a otro contexto.';
$string['movingcategory'] = 'Moviendo categoría';
$string['movingcategoryandfiles'] = '¿Está seguro de que quiere mover la categoría {$a->name} y todas sus categorías subordinadas al contexto de \"{$a->contextto}\"?<br /> Hemos detectado {$a->urlcount} archivos enlazados desde preguntas en {$a->fromareaname}; ¿desea copiarlas o moverlas a {$a->toareaname}?';
$string['movingcategorynofiles'] = '¿Está seguro de que quiere mover la categoría \"{$a->name}\" y todas sus categorías subordinadas al contexto para \"{$a->contextto}\"?';
$string['movingquestions'] = 'Moviendo preguntas y cualquier archivo';
$string['movingquestionsandfiles'] = '¿Está seguro de que quiere mover la(s) pregunta(s) {$a->questions} al contexto de <strong>\"{$a->tocontext}\"</strong>?<br /> Hemos detectado <strong>{$a->urlcount} archivos</strong> enlazados con esta(s) pregunta(s) en {$a->fromareaname}; ¿desea copiarlos o moverlos a {$a->toareaname}?';
$string['movingquestionsnofiles'] = '¿Está seguro de que quiere mover la(s) pregunta(s) {$a->questions} al contexto de <strong>\"{$a->tocontext}\"</strong>?<br /> No hay <strong>ningún archivo</strong> enlazado desde esta(s) pregunta(s) en {$a->fromareaname}.';
$string['needtochoosecat'] = 'Necesita elegir una categoría para mover esta pregunta o presionar \'cancelar\'.';
$string['nopermissionadd'] = 'No tiene permiso para agregar preguntas aquí.';
$string['noprobs'] = 'No se han encontrado problemas en su base de datos de preguntas.';
$string['notenoughdatatomovequestions'] = 'Necesita proporcionar los ids de las preguntas que quiere mover.';
$string['permissionedit'] = 'Editar esta pregunta';
$string['permissionmove'] = 'Mover esta pregunta';
$string['permissionsaveasnew'] = 'Guardar esto como pregunta nueva';
$string['permissionto'] = 'Usted tiene permiso para:';
$string['published'] = 'publicado';
$string['questionaffected'] = '<a href=\"$a->qurl\">La pregunta \"$a->name\" ($a->qtype)</a> está en esta categoría, pero está también siendo usada en <a href=\"$a->qurl\">el cuestionario \"$a->quizname\"</a> en otro curso \"$a->coursename\".';
$string['questioncatsfor'] = 'Categorías de pregunta para \'$a\'';
$string['questionuse'] = 'Usar pregunta en esta actividad';
$string['shareincontext'] = 'Compartir en contexto para $a';
$string['tofilecategory'] = 'Escribir categoría a archivo';
$string['tofilecontext'] = 'Escribir contexto a archivo';
$string['unknown'] = 'Desconocido';
$string['unpublished'] = 'sin publicar';
$string['categorydoesnotexist'] = 'Esta categoría no existe';
$string['editingquestion'] = 'Edición de una pregunta';
$string['fractionsnomax'] = 'Una de las respuestas debería tener una puntuación del 100%% de modo que sea posible conseguir la calificación máxima en esta pregunta.';
$string['makechildof'] = 'Hacer Hijo de \'$a\'';
$string['maketoplevelitem'] = 'Mover al nivel superior';
$string['missingimportantcode'] = 'Este tipo de pregunta carece de un código importante: $a.';
$string['notenoughdatatoeditaquestion'] = 'No se ha especificado ni el id de la pregunta ni el de la categoría y tipo de pregunta.';
$string['questionbank'] = 'Banco de preguntas';
$string['questiondoesnotexist'] = 'Esta pregunta no existe.';
$string['unknownquestiontype'] = 'Tipo de pregunta desconocido: $a.';

?>
