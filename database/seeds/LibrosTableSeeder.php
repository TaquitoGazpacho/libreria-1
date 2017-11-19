<?php

use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isaac = DB::table('escritors')->where('nombre','=','Isaac')->first();
        $arthur = DB::table('escritors')->where('nombre','=','Arthur C.')->first();
        $philip = DB::table('escritors')->where('nombre','=','Philip K.')->first();
        $ray = DB::table('escritors')->where('nombre','=','Ray')->first();
        $robert = DB::table('escritors')->where('nombre','=','Robert A.')->first();
        $ursula = DB::table('escritors')->where('nombre','=','Ursula K.')->first();

        DB::table('libros')->insert([
            'titulo' => 'Fundación',
            'descripcion' => 'Una de las características más interesantes de la novela es que se trata de un futuro muy lejano, decenas de miles de años en el futuro pero con condiciones netamente humanas. En este futuro la humanidad se ha extendido por toda la Galaxia adoptando una forma de gobierno imperial llamado el Imperio Galáctico el cual por extensión, tanto en tiempo como en espacio, comienza a corromperse y estancarse en cuanto a nuevos conocimientos científicos asumiendo que todo lo que el hombre puede o debe descubrir ya está hecho. Básicamente la primera trilogía (Fundación - Fundación e Imperio - Segunda Fundación) trata sobre los resultados prácticos de la nueva ciencia llamada Psicohistoria desarrollada por Hari Seldon, el cual predice de manera matemática el fin del Imperio por su propia corrupción e inacción para seguir existiendo como tal y cómo ésta influye en curso de las acciones de determinados personajes que habrán de formar parte en el damero histórico cuya finalidad es la de llevar a un nuevo imperio después de la destrucción del primero. También muestra el origen del nuevo estado galáctico conocido como "Fundación" destinado por sus avances tecnológicos a dominar toda la galaxia.',
            'isbn' => '978-84-9800-311-6',
            'editorial' => 'La Factoría de Ideas',
            'year' => 1951,
            'ebook' => 'Isaac_Asimov_-_Fundación.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Fundación y Tierra',
            'descripcion' => 'La Fundación entra en contacto con los restos del Imperio Galáctico, y se enfrenta a su último gran general, Bel Riose, en la guerra que debe decidir el destino de la Galaxia. Tanto para la primera novela (Fundación) como para esta historia, Asimov se inspiró en la caída del Imperio romano de Occidente. En este caso, el Imperio Galáctico está inspirado en el Imperio bizantino y Bel Riose es un personaje inspirado en Belisario, el general del emperador bizantino Justiniano I.\nLa primera parte del libro explica como el Imperio Galáctico que se está colapsando de forma acelerada, lanza un ataque contra la Fundación. El ataque lo lidera el general Bel Riose. El Imperio, a pesar de su declive, todavía es muy superior a la Fundación. Lathan Devers, un agente de la Fundación, va en misión a Trántor para intentar ver al Emperador Cleón II. El Emperador recapacita y ejecuta a Riose, por ser demasiado "efectivo" y, por lo tanto, una amenaza para el emperador que en anteriores ocasiones ha sido asesinado por un militar. El final de la guerra es la muerte de Riose.',
            'isbn' => '978-84-9800-323-9',
            'editorial' => 'La Factoría de Ideas',
            'year' => 1952,
            'ebook' => 'Isaac_Asimov_-_Fundacion_y_Tierra.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Segunda Fundación',
            'descripcion' => 'Hari Seldon predijo la caída del Imperio, y, con el fin de restaurar la civilización en el menor tiempo posible, creó dos Fundaciones. La primera fue establecida en Términus a plena luz del conocimiento público. La segunda, «en el otro extremo de la galaxia», tomó forma bajo un velo de total silencio, ya que custodia las leyes de la psicohistoria, que solo son válidas mientras permanezcan en secreto. Cuando la Primera Fundación fue conquistada por el poder de una sola persona, un mutante llamado el Mulo, la Segunda Fundación se vio forzada a revelar su existencia y, lo que es peor, una parte de su poder. El Mulo y los vestigios de la Primera Fundación harán cualquier cosa por descubrirla. Esta es la historia de la Segunda Fundación.',
            'isbn' => '978-84-9800-378-9',
            'editorial' => 'La Factoría de Ideas',
            'year' => 1953,
            'ebook' => 'Isaac_Asimov_-_Segunda_Fundación.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Yo, Robot',
            'descripcion' => 'Yo, Robot es una colección de relatos en los que se establecen y plantean los problemas de las tres leyes de la robótica que son un compendio fijo e imprescindible de moral aplicable a supuestos robots inteligentes. Los relatos plantean diferentes situaciones a las que tendrán que enfrentarse distintos especialistas en robótica y en las que se plantean paradojas e ingeniosos ejercicios intelectuales que indagan sobre la situación del hombre actual en el universo tecnológico. La protagonista de varias de las historias es Susan Calvin, experta en robopsicología.',
            'isbn' => '978-84-350-3482-1',
            'editorial' => 'Edhasa',
            'year' => 1950,
            'ebook' => 'Isaac_Asimov_-_Yo,_robot.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Las bóvedas de Acero',
            'descripcion' => 'En el Enclave Espacial, a las afueras de la Ciudad de Nueva York, un científico de los Mundos Exteriores ha aparecido asesinado. El detective Elijah Baley tiene que ocuparse de este caso en la para él inquietante y odiosa compañía de un robot humanoide: R. Daneel Olivaw. La investigación es delicada ya que puede terminar con el equilibrio entre los descendientes de la colonización estelar, en perfecta comunión con sus robots, y los habitantes de la Tierra, que, refugiados en grandes metrópolis subterráneas a las llaman Ciudades, sobreviven precariamente a la falta de recursos naturales y temen a los robots.',
            'isbn' => '978-84-9793-730-9',
            'editorial' => 'Debolsillo',
            'year' => 1954,
            'ebook' => 'Isaac_Asimov_-_Bovedas_de_acero.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Los Robots del Amanecer',
            'descripcion' => 'Basándose en sus rigurosos conocimientos científicos, Asimov ofrece una visión de lo que puede ser en siglos venideros la vida humana en el cosmos. Los robots del amanacer relata cómo en el planeta Aurora los hombres y sus robots vivían en una armonía aparentemente perfecta hasta el instante en el que el robot más avanzado fue asesinado. ¿Ocultaba la muerte del androide una lucha despiadada por el control del Universo?',
            'isbn' => '978-84-9759-955-1',
            'editorial' => 'Debolsillo',
            'year' => 1983,
            'ebook' => 'Isaac_Asimov_-_Los_robots_del_amanecer.epub',
            'escritor_id' => $isaac->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El Fin de la Infancia',
            'descripcion' => 'Es un libro tan ameno, desde el punto de vista de la narrativa pura, como cualquier otra novela común contemporánea. La obra que según William Du Bois merece la total atención de los habitantes de "esta época de ansiedad"-- tiene como tema la futura evolución del hombre. Una raza extraña llega a la Tierra y trae consigo paz, prosperidad..., y la inesperada tragedia de la perfección. ¿Qué seguirá a la extinción de la raza humana? Arthur C. Clarke, en un final de notable belleza, plantea la más alucinante de las hipótesis.',
            'isbn' => '978-84-450-7700-9',
            'editorial' => 'Minotauro',
            'year' => 1953,
            'ebook' => 'Arthur_C._Clarke_-_El_fin_de_la_infancia.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'La Ciudad y las Estrellas',
            'descripcion' => 'En un remoto futuro, la ciudad de Diaspar acoge a los últimos restos de la humanidad sobre la Tierra. Perseguidos hasta su planeta natal por los misteriosos Invasores que conquistaron el universo, los humanos abandonaron su Imperio Galáctico. Desde entonces, y durante millones de años, Diaspar ha mantenido a sus habitantes sumidos en el grato estupor de una sociedad perfecta. Gracias a sus poderosos circuitos de eternidad, la ciudad conserva para siempre todos sus elementos, incluyendo a sus ciudadanos, que emergen completamente adultos de la Sala de Creación, viven vidas plenas que duran siglos, y por fin vuelven a los Bancos de Memoria a esperar su resurrección al cabo de miles de años. Pero muy rara vez, en Diaspar nace un ciudadano único, cuya información no consta previamente en la memoria de la ciudad. Nadie sabe por qué aparecen, ni cuál es su función en el sofisticado mecanismo de Diaspar. Alvin es uno de estos únicos, y como tal carece de vidas anteriores a las que remitirse. Por eso no le resulta difícil cuestionar la organización social aparentemente perfecta de Diaspar, y especialmente la limitación psicológica que hace que sus habitantes sean incapaces de salir de ella. A pesar de las comodidades que le rodean, Alvin está insatisfecho. Pero pronto encuentra su objetivo: abandonar Diaspar, averiguar si el exterior es tan hostil como dicen, y descubrir si realmente son los últimos humanos sobre la Tierra.',
            'isbn' => '978-84-350-2099-1',
            'editorial' => 'Edhasa',
            'year' => 1956,
            'ebook' => 'Arthur_C._Clarke_-_La_ciudad_y_las_estrellas.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Las Fuentes del Paraíso',
            'descripcion' => 'Ésta es la historia de Vannevar Morgan, el mayor ingeniero de su época: el siglo XXII. Tras construir un puente sobre el estrecho de Gibraltar, sueña con un logro aún mayor, una suerte de puente hacia las estrellas: un ascensor espacial. Para ello, proyecta tender un cable que se extienda desde el ecuador hasta un satélite en órbita geosincrónica. Pero en su empeño Morgan encontrará diversos obstáculos: ante todo, la oposición de los monjes que ocupan el punto ideal de anclaje del cable, una montaña en la isla de Taprobana. También debe encontrar financiación, resolver problemas políticos, convencer a los escépticos y finalmente solucionar las inevitables crisis de ingeniería que acompañan a la construcción del ascensor. La hazaña de Morgan se entrelaza con la historia antigua de Taprobana, cuyo legendario rey Kalidasa construyó un palacio fabuloso en las alturas intentando alcanzar la divinidad; y con el relato contemporáneo de la visita al sistema solar de una sonda extraterrestre que pone fin a la vieja duda existencial: no estamos solos en el universo. Arthur C. Clarke, uno de los grandes maestros de la ciencia-ficción y universalmente conocido como autor de 2001: una odisea del espacio, obtuvo con Las fuentes del paraíso los premios Hugo y Nebula, los más importantes del género.',
            'isbn' => '978-84-988-9047-1',
            'editorial' => 'Alamut',
            'year' => 1979,
            'ebook' => 'Arthur_C._Clarke_-_Las_Fuentes_del_paraiso.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Cita con Rama',
            'descripcion' => 'Después del impacto de un enorme asteroide que destruye Padua y Verona, se crea en la un sofisticado sistema de detectar la trayectoria de cualquier objeto que se detecte desde la Tierra. De esta forma se detecta Rama, un extraño asteroide que, gira a un velocidad increíble y que, según todos los cálculos no volverá a pasar jamás por el sistema solar. Pero lo más inquietante se producce cuando aparecen indicios de que Rama pueda ser artificial, con las implicaciones que ello conlleva.Clarke es el novelista de ciencia ficción más sólido en activo y uno de los más conocidos y galardonados tanto en el campo literario como en el científico. Su obra Cita con Rama, es una de las obras más premiadas de todos los tiempos (premios Nebula, Locus, Hugo, Júpiter y John Campbell Memorias, entre otros) y sin duda una de las mejores novelas escritas por el autor. Todo un clásico para los aficionados a la ciencia-ficción.',
            'isbn' => '978-84-350-2104-1',
            'editorial' => 'Edhasa',
            'year' => 1973,
            'ebook' => 'Arthur_C._Clarke_-_Cita_con_Rama.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => '2001: Una Odisea Espacial',
            'descripcion' => 'Un sobrecogedor viaje interestelar en busca de la evidencia de que el ser humano no está solo en el cosmos. Una expedición a los confines del universo y a los del alma, en la que pasado, presente y futuro se amalgaman en un continuo enigmático. ¿Qué esencia última nos rige? ¿Qué lugar ocupa el hombre en el complejo entramado del infinito? ¿Qué es el tiempo, la vida, la muerte..? Una grandiosa novela de dimensiones épicas cuyo amplio abanico de interpretaciones ofrece una visión totalizadora. Arthur C.Clarke colaboró estrechamente con Stanley Kubrick en la producción de la célebre película homónima.',
            'isbn' => '978-84-975-9929-0',
            'editorial' => 'Debolsillo',
            'year' => 1968,
            'ebook' => 'Arthur_C._Clarke_-_2001_Una_odisea_espacial.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Cuentos de la Taberna del Ciervo Blanco',
            'descripcion' => 'Este divertido volumen de Arthur C. Clarke, recoge quince improbables historias, narradas de viva voz en un pub londinense en el que se reúne, los miércoles de todas las semanas, un selecto grupo de escritores, científicos, periodistas y editores. El gran protagonista de esta tertulia es Harry Purvis, un jactancioso y ocurrente fabulador que aprovecha cualquier pretexto o alusión para abrumar a sus amigos con extraños sucesos de los que ha sido supuesto testigo privilegiado conocedor. Todos los relatos se hallan animados por una lógica disparatada que los hace convincentes precisamente por resultar inverosímiles. No se trata de narraciones de ciencia-ficción situadas en el futuro- como la que el propio Clarke reunión en "El viento del Sol. Relatos de la era espacial", o Isaac Asimov en "Estoy en Puertomarte sin Hilda"- sino de aventuras basadas la mayoría de las veces en la extrapolación hasta el absurdo de las posibilidades tecnológicas que encierra el conocimiento científico contemporáneo; Inventos sorprendentes, situaciones impensadas y experimentos audaces-máquinas para producir silencio, reproducir el placer sexual o fabricar melodías perfectas, buques que aran los océanos, computadoras para uso militar que adoptan comportamientos pacifistas, colonias de termitas que incorporan conocimiento humano, etc.- constituyen la trama, ingeniosa e imaginativa, de estos Cuentos de la Taberna del Ciervo Blanco. ',
            'isbn' => '978-84-206-7293-9',
            'editorial' => 'Alianza',
            'year' => 1957,
            'ebook' => 'Arthur_C._Clarke_-_Cuentos_de_la_taberna_del_ciervo_blanco.epub',
            'escritor_id' => $arthur->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Lotería Solar',
            'descripcion' => 'En la Federación de los Nueve Planetas, un mundo presuntamente dominado por los números y el azar, el Presentador -una suerte de presidente mundial- es elegido mediante una sofisticada lotería. Así se pretende garantizar el juego limpio y la igualdad de oportunidades. Pero pronto se evidencia que el sistema no está exento de manipulaciones de quienes persiguen tan preciado cargo.Lotería solar es la primera novela de Philip K. Dick, donde se detectan las líneas maestras de su producción: su denuncia de los abusos de poder y la caricaturización de la sociedad norteamericana. Repleto de personajes y ambientes dignos del mejor cine negro, éste es un salvaje y divertido viaje a un mundo que ha enloquecido definitivamente.',
            'isbn' => '978-84-450-7630-9',
            'editorial' => 'Minotauro',
            'year' => 1955,
            'ebook' => 'Philip K.Dick_-_Loteria_solar.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El Hombre en el Castillo',
            'descripcion' => 'El Hombre en el Castillo nos sumerge en un mundo alternativo en el cual el Eje ha derrotado a los Aliados en la segunda guerra mundial y los Estados Unidos han sido invadidos y divididos entre los vencedores. Mientras los nazis se han anexionado la costa atlántica, donde han instaurado un régimen de terror, la costa pacífica permanece en manos japonesas. En esta América invadida, los nativos son ciudadanos de segunda clase a pesar de que su cultura es admirada por los vencedores, hasta el punto de que uno de los mejores negocios es la venta de auténticas antigüedades americanas, como relojes de Mickey Mouse o chapas de Coca-Cola.\n"Los caracteres de El hombre en el castillo no son sólo productos de la imaginación sino también manifestaciones de un sistema de fuerza en el que el I Ching obra como un nexo análogo a un polo magnético ... La mejor novela hasta la fecha del escritor de ciencia ficción más consistentemente brillante. Ante todo por la verosimilitud con que Dick ha elaborado una ingeniosa estructura básica (unos Estados Unidos derrotados en la segunda guerra mundial y que han sido divididos en tres partes: las costas del Atlántico y del Pacifico respectivamente ocupadas por alemanes y japoneses, y una zona tapón entre dos esferas de influencia); luego por la absoluta originalidad de la presunción básica--los alemanes ganaron la segunda guerra--aunque el Libro de los Cambios informa sin embargo que esta amarga derrota no ha ocurrido en el mundo real..." JOHN BRUNNER. Premio Hugo 1963.',
            'isbn' => '978-84-450-7774-0',
            'editorial' => 'Minotauro',
            'year' => 1962,
            'ebook' => 'Philip_K._Dick_-_El_hombre_en_el_castillo.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Tiempo Desarticulado',
            'descripcion' => 'Ragle Gumm es un hombre corriente con una vida corriente. Pero tiene una manera de ganarse la vida de lo más singular: cada día participa en el concurso diario del periódico local «¿Dónde estará la próxima vez el hombrecito verde?», y siempre gana. Ha ganado durante los tres últimos años, sin excepción. Sin embargo, esta idílica existencia cambiará de manera drástica cuando Ragle Gumm sienta la inquietud de salir del pueblo, cosa que no ha hecho nunca, y se dé cuenta de que una autoridad desconocida se lo impide. Poco a poco, Ragle empieza a sospechar que su mundo no es más que una ilusión, construida a su alrededor con el único propósito de mantenerlo dócil y feliz. Pero si está en lo cierto, ¿cómo es el mundo exterior y qué hace en realidad cada día cuando cree que intenta adivinar dónde estará el hombrecito verde?',
            'isbn' => '978-84-450-0050-2',
            'editorial' => 'Minotauro',
            'year' => 1959,
            'ebook' => 'Philip_K._Dick_-_Tiempo_desarticulado.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Los tres estigmas de Palmer Eldritch',
            'descripcion' => 'En un futuro no muy lejano, lo único que hace soportable la vida a los seres humanos son las drogas. Obligados a huir de un planeta Tierra casi inhabitable, los colonos de Marte viven bajo el dominio de Leo Bulero, propietario de Equipos P. P., la compañía que fabrica las miniaturas y administra el alucinógeno ilegal (Can-Di) que les permite evadirse trasladándolos a universos y cuerpos de muñecos tipo Barbie. El monopolio de Bulero se ve seriamente amenazado cuando Palmer Eldritch regresa de un largo viaje trayendo consigo una droga nueva y legal (Chew-Zi) que anuncia bajo el lema «,Dios promete la vida eterna. Nosotros la proporcionamos»,.El antihéroe de esta novela, Barney Mayerson, empleado de Equipos P. P., se verá inmerso en una trepidante intriga que le enfrentará a conflictos de lealtad, justicia y amor. A su vez, se acercará al núcleo de un misterio: ¿qué pretende Palmer Eldritch? Ya no parece humano, ¿qué clase de metamorfosis ha sufrido? ¿Se ha convertido en una divinidad o en un ser infernal?Ésta es una novela absorbente donde se despliegan motivos constantes en la narrativa de Dick: la mezcla de drogas y religión, el malestar psicológico de los personajes, el poder y la locura, la presencia de un demiurgo cruel y, sobre todo, la multiplicidad de niveles de la realidad y la difusa frontera entre ésta y la ilusión.',
            'isbn' => '978-84-450-7635-4',
            'editorial' => 'Minotauro',
            'year' => 1965,
            'ebook' => 'Philip_K._Dick_-_Los_tres_estigmas_de_Palmer_Eldritch.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => '¿Sueñan los androides con ovejas eléctricas?',
            'descripcion' => 'Una agradable y ligera descarga eléctrica, activada por la alarma automática del Climatizador de Ánimo Penfield, despierta a Rick Deckard, que deja la cama ataviado con su pijama multicolor y apremia a su esposa a que reajuste su climatizador para sentir deseos de levantarse. Deckard es un cazarrecompensas, trabaja para el Departamento de Policía de San Francisco retirando androides de las calles. Vive en una Tierra prácticamente desierta desde que los seres humanos han emigrado a la nueva colonia en Marte después de la Guerra Mundial Definitiva. Los pocos que aún quedan en nuestro planeta buscan poseer carísimos animales; a través de ellos sienten la empatía que los diferencia de los androides. Sin embargo, Deckard sufre por no poder permitirse económicamente uno y finge cuidar de una oveja auténtica cuando en realidad es solo un ejemplar eléctrico. Ataviado con su modelo Ajax de Calzón de Plomo Mountibank contra el polvo radiactivo, se encamina al trabajo, descubre que su superior está en el hospital con una herida de láser en el espinazo y recibe la orden de perseguir al nuevo androide que ha podido ser el responsable, el Nexus-6, de cerebro altamente sofisticado.',
            'isbn' => '9788437634555',
            'editorial' => 'Cátedra',
            'year' => 1968,
            'ebook' => 'Philip_K._Dick_-_ Suenan los androides con ovejas electricas.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Ubik',
            'descripcion' => 'Glen Runciter está muerto. ¿O lo están todos los demás? Lo que es seguro es que alguien ha muerto en una explosión organizada por los competidores de Runciter. De hecho, sus empleados asisten a un funeral. Pero durante el duelo comienzan a recibir mensajes desconcertantes, e incluso morbosos, de su jefe.Y el mundo a su alrededor comienza a desmoronarse de un modo que sugiere que a ellos tampoco les queda mucho tiempo. Esta mordaz comedia metafísica de muerte y salvación (que podrá llevar en un cómodo envase) es un tour de force de amenaza paranoica y comedia absurda, en la cual los muertos ofrecen consejos comerciales, compran su siguiente reencarnación y corren el riesgo continuo de volver a morir.',
            'isbn' => '978-84-450-7830-3',
            'editorial' => 'Minotauro',
            'year' => 1969,
            'ebook' => 'Philip_K._Dick_-_Ubik.epub',
            'escritor_id' => $philip->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Crónicas marcianas',
            'descripcion' => 'Esta colección de relatos reúne la crónica de la colonización de Marte por parte de la humanidad que abandona la Tierra en sucesivas oleadas de cohetes plateados y sueña con reproducir en el Planeta rojo una civilización de perritos calientes, cómodos sofás y limonada en el porche al atardecer. Pero los colonos también traen en su equipaje las enfermedades que diezmarán a los marcianos y mostrarán muy poco respeto por una cultura planetaria, misteriosa y fascinante, que éstos intentarán proteger ante la rapacidad de los terrícolas. Escritas en la década de 1940 y situadas en el lejano futuro que comienza en 1999, estas historias, aparentemente sencillas, sirven de excusa para que Bradbury se sumerja en los misterios del alma humana y desarrolle una de las hazañas más apasionantes de la humanidad.',
            'isbn' => '978-84-450-7689-7',
            'editorial' => 'Minotauro',
            'year' => 1950,
            'ebook' => 'Ray_Bradbury_-_Crónicas_marcianas.epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El hombre ilustrado',
            'descripcion' => 'El hombre ilustrado (1951) es un libro de dieciocho cuentos de ciencia ficción escritos por Ray Bradbury, los cuales exploran la naturaleza humana. Las historias no tienen relación aparente entre sí, pero muchas muestran cómo la tecnología puede destruir a la humanidad. Las historias se presentan a través de varias Ilustraciónes en el cuerpo de un vagabundo Los cuentos que se les cuenta al hombre son sus ilustraciones que tienen vida por la noche ya que fueron pintadas por una bruja que viaja en el tiempo, Las 18 ilustraciones cuentan 1 cuento, pero en la parte del omoplato derecho predice el futuro con que el hombre ilustrado esta. Así, el relato de “el hombre ilustrado” sirve como la narración marco para todos los cuentos. Todos excepto una de las historias habían sido publicados previamente, aunque Bradbury revisó algunos de los textos.',
            'isbn' => '978-84-450-7399-5',
            'editorial' => 'Minotauro',
            'year' => 1951,
            'ebook' => 'Ray_Bradbury_-_El_hombre_ilustrado.epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Fahrenheit 451',
            'descripcion' => 'Fahrenheit 451. La temperatura a la que el papel se enciende y arde. Como 1984 de George Orwell, como Un mundo feliz de Aldous Huxley, Fahrenheit 451 describe una civilización occidental esclavizada por los media, los tranquilizantes y el conformismo. La visión de Bradbury es asombrosamente profética: las pantallas de televisión ocupan paredes y exhiben folletines interactivos, unos auriculares transmiten a todas horas una insípida corriente de música y noticias, en las avenidas los coches corren a 150 kilómetros por hora persiguiendo a peatones; y el cuerpo de bomberos, auxiliados por el Sabueso Mecánico, rastrea y elimina a los disidentes que conservan y leen libros.',
            'isbn' => '978-84-450-7641-5',
            'editorial' => 'Minotauro',
            'year' => 1953,
            'ebook' => 'Ray_Bradbury_-_Fahrenheit_451.epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El Árbol de las Brujas',
            'descripcion' => 'Como cada año en la noche de Halloween, un grupo de niños se disfrazan y salen a la calle para pedir premio o prenda. Cuando van a buscar al último chico de la pandilla, Pipkin, lo encuentra alicaído, y éste les pide que le esperen en la casa Fantasmal de la Cañada. Allí les aguarda un peculiar personaje que les descubrirá los orígenes de la fiesta de Halloween.',
            'isbn' => '978-84-450-7418-3',
            'editorial' => 'Booket',
            'year' => 1972,
            'ebook' => 'Ray_Bradbury_-_El_árbol_de_las_brujas.epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Cementerio Para Lunáticos',
            'descripcion' => 'Un prestigioso guionista de ciencia ficción es contratado por uno de los grandes estudios de Hollywood. Recibe una invitación anónima que lo conduce a un cementerio separado de los estudios por una mera pared, y al descubrimiento de un cuerpo congelado en el tiempo y listo para trepar desde la ciudad de los muertos a la ciudad de la luz. Un extraño misterio va desplegándose a través de una serie de raros encuentros: un director con monóculo,un actor que ha interpretado el papel de Jesús, fanáticos cazadores de autógrafos, y un genio de los efectos especiales.',
            'isbn' => '978-84-450-7400-8',
            'editorial' => 'Minotauro',
            'year' => 1990,
            'ebook' => 'Ray_Bradbury_-_Cementerio_para_lunáticos.epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El Ruido de un Trueno',
            'descripcion' => 'Es uno de los relatos más conocidos en Bradbury, y el relato más reimpreso dentro del género, según Locus Magazine. En el año 2055 se ha inventado la máquina del tiempo y una empresa tiene una franquicia para organizar safaris al pasado y así poder disparar contra un tiranosaurio rex. El relato narra una de estas expediciones.',
            'isbn' => '978-88-775-4149-9',
            'editorial' => 'Cide8',
            'year' => 1990,
            'ebook' => 'Ray_Bradbury_-_El_ruido_de_un_trueno .epub',
            'escritor_id' => $ray->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Amos de Títeres',
            'descripcion' => 'En puntos clave de la geografía de los Estados Unidos una fuerza invasora se está apoderando de las comunicaciones, el gobierno, la industria… y de los cuerpos de la gente. El país es incapaz de detenerla, los invasores se multiplican con mayor rapidez de la que pueden ser destruidos, controlando la mente de cualquier incauto que se cruce en su camino. Es entonces cuando entra en acción Sam Cavanaugh, un eficaz oficial de inteligencia de la sección más desconocida del servicio secreto de los Estados Unidos. Cavanaugh es el único hombre capaz de detener la invasión, pero para hacerlo... ¡tendrá que dejarse invadir él mismo!',
            'isbn' => '978-84-980-0542-4',
            'editorial' => 'Factoría de Ides',
            'year' => 1951,
            'ebook' => 'Robert_A._Heinlein_-_Amos_de_títeres.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Estrella Doble',
            'descripcion' => '¿Podría un miserable actor sustituir al político más famoso del imperio? Lorenzo Smith sintió un hormigueo en su cuerpo cuando le propusieron el trabajo, ya que Bonforte era el político más reputado en la Galaxia. Sería un gran desafío dar vida a este personaje, por supuesto. Pero cuando estudió el papel vio muy claro que se encontraba ante una peligrosa misión de cuyo resultado dependía el destino del Sistema Solar...',
            'isbn' => '978-84-842-1420-5',
            'editorial' => 'Factoría de Ideas',
            'year' => 1956,
            'ebook' => 'Robert_A._Heinlein_-_Estrella_doble.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Tropas del Espacio',
            'descripcion' => 'La Tierra, siglo XXIII: Johnnie Rico acaba de cumplir los dieciocho, y por fin se puede alistar en el Ejército para cumplir con el servicio de dos años, tras el cuál se convertirá en un ciudadano con derecho al voto. A instancias de un amigo, Rico se alista en la infantería móvil. Tras un duro periodo de instrucción en el campamento Arthur Currie, bajo las órdenes del sargento Zim, Rico se convirtió en un soldado cualificado. Mientras tanto, una especie alienígena con aspecto de insecto gigante ataca la Tierra con una violencia inusitada, convirtiendo la ciudad de Buenos Aires en un amasijo de escombros. Es el momento de que Johnnie Rico y sus compañeros prueben su valía en un combate real... en el espacio.',
            'isbn' => '978-84-270-0734-5',
            'editorial' => 'Martinez Roca',
            'year' => 1959,
            'ebook' => 'Robert A._Heinlein_-_Tropas_del_espacio.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Forastero en Tierra Extraña',
            'descripcion' => 'La primera expedición a Marte había desaparecido misteriosamente al llegar al planeta rojo. La segunda, un cuarto de siglo -y una guerra mundial- más tarde, encontró un único superviviente, hijo de dos miembros de la misión anterior, Valentine Michael Smith, huérfano y educa­do en Marte... por marcianos. Humano por fuera, marciano por dentro, Michael habla, piensa, siente y ve el mundo como un alienígena. Llevado a la Tierra, todo es nuevo para él: la lengua, la comida, las costumbres, las mujeres... hasta el insoportable peso de la grave­dad. Habría corrido el peligro de acabar convertido en atracción de feria si no fue­ra porque, legalmente. era el heredero de las fortunas de los miembros de la primera expedición y, además, único propietario del planeta Marte. Así que. empezando por las autoridades, son muchos los interesados en quitarle de en medio. Pero el indefenso Michael es rescatado in extremis y acaba en casa de Jubal Harshaw, médico, abogado, culto, cínico y "bon vivant". El influyente Hars­haw descubre que el joven no es tan in­defenso como parece, de Marte se ha traído no sólo peculiares creencias sino también extraordinarios poderes para-psicológicos y una inagotable disposi­ción para aprender. Harshaw deja a un lado su cinismo y decide aprovechar las facultades de Michael para hacer de él una especie de nuevo mesías... ',
            'isbn' => '978-84-014-6315-0',
            'editorial' => 'Plaza & Janés',
            'year' => 1961,
            'ebook' => 'Robert_A._Heinlein_-_Forastero_en_tierra_extrana.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'La Luna es una Cruel Amante',
            'descripcion' => 'Aunque sus abuelos fueron recluidos en su día en la colonia, Mannie nació libre y eso supone una gran diferencia. Como contratista privado, hace negocios con la Autoridad pero no figura en su nómina. El régimen de Luna es severo e injusto, la revolución se masca en el ambiente y se habla incluso de derrocar a la odiada Autoridad. Cuando Mannie ayuda a la preciosa Wyoming Knott a escapar de los guardaespaldas del Guardián, se encuentra de alguna manera en el centro de una rebelión sin esperanza. Aunque Mannie tiene un arma secreta: Mike es el ordenador más inteligente de la colonia, está conectado a toda clase de equipos útiles... Y Mannie es el mejor amigo de Mike. Esta novela fue ganadora del Premio Hugo.',
            'isbn' => '978-84-980-0503-5',
            'editorial' => 'Factoría de Ideas',
            'year' => 1966,
            'ebook' => 'Robert_A._Heinlein_-_La_Luna_es_una_cruel_amante.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'El Número de la Bestia',
            'descripcion' => 'El famoso número de la bestia, el 666, no significa seiscientos sesenta y seis, sino seis elevado a sexta potencia y vuelto a elevar a la sexta potencia, y refleja el número de universos posibles. Este es el tema de esta importante novela de Robert A. Heinlein, el autor de ciencia ficción más galardonado de todos los tiempos',
            'isbn' => '978-84-270-0755-0',
            'editorial' => 'Martinez Roca',
            'year' => 1979,
            'ebook' => 'Robert_A._Heinlein_-_El_numero_de_la_bestia.epub',
            'escritor_id' => $robert->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Historias de Terramar I: Un mago de Terramar',
            'descripcion' => 'En estas dos primeras novelas de la saga, las aventuras vividas por el joven mago Ged y la sacerdotisa Tenar los transformarán profundamente, les harán crecer y liberarse de sus miedos, y se convertirán en auténticos héroes que ayudarán a restablecer el equilibrio cósmico.',
            'isbn' => '978-84-450-7668-2',
            'editorial' => 'Minotauro',
            'year' => 1968,
            'ebook' => 'Ursula_K._Le_Guin- Un_mago_de_Terramar.epub',
            'escritor_id' => $ursula->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'La Mano Izquierda de la Oscuridad',
            'descripcion' => 'Escribiré mi informe como si contara una historia, pues me enseñaron siendo niño que la verdad nace de la imaginación.» Así comienza su relato Genly Ai, enviado al planeta Gueden, también llamado Invierno por su gélido clima, con el propósito de contactar con sus habitantes y proponerles unirse a la liga de planetas conocida como el Ecumen. Los guedenianos tienen una particularidad que los hace únicos: son hermafroditas, y adoptan uno u otro sexo exclusivamente en la época de celo, denominada kémmer. En Invierno, Ai conoce a Estraven, un alto cargo que le mostrará cuán diferente puede llegar a ser una sociedad donde no existe una diferenciación sexual.',
            'isbn' => '978-84-450-7754-2',
            'editorial' => 'Minotauro',
            'year' => 1969,
            'ebook' => 'Ursula_K._Le_Guin_-_La_mano_izquierda_de_la_oscuridad.epub',
            'escritor_id' => $ursula->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Los Dones',
            'descripcion' => 'En las Tierras Altas, dos jóvenes deberán aprender no sólo a vivir en un mundo plagado de luchas, ambición y orgullo, sino a asumir suspropios dones, sus propios poderes, su propio papel en el mundo. Los dones nos trae de nuevo a la mejorUrsula K. Le Guin en una apasionante y conmovedora historia magistralmente contada.',
            'isbn' => '978-84-450-7617-0',
            'editorial' => 'Minotauro',
            'year' => 2004,
            'ebook' => 'Ursula K._Le_Guin_-_Los_dones.epub',
            'escritor_id' => $ursula->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'La Rueda Celeste',
            'descripcion' => 'En un futuro castigado por la violencia y las catástrofes medioambientales, George Orr descubre que sus sueños tienen la capacidad de alterar la realidad. George buscará la ayuda del doctor William Haber, un psiquiatra que no dudará en aprovecharse de su poder. Cuando el doctor Haber empiece a manipular sus sueños en beneficio propio George deberá luchar para proteger la realidad.',
            'isbn' => '978-84-450-0425-8',
            'editorial' => 'Minotauro',
            'year' => 1971,
            'ebook' => 'Ursula_K._Le_Guin_-_La_rueda_del_cielo.epub',
            'escritor_id' => $ursula->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Las Doce Moradas Del Viento',
            'descripcion' => 'Cada uno de los diecisiete cuentos reunidos en este volumen es una pequeña obra maestra que explora los temas que preocupan a la autora y constituyen un estudio lúcido de los problemas que aquejan a nuestra sociedad y a las relaciones entre los sexos y entre jóvenes y mayores. Unas narraciones fascinantes y emocionantes que sumergen al lector en mundos lejanos y, a la vez, cercanos. Todos los relatos están precedidos por una pequeña introducción de la autora que explica sus fuentes de inspiración y las circunstancias que llevaron a la redacción del texto, además de situar cada uno de ellos dentro del marco general de su obra.',
            'isbn' => '978-84-900-6511-2',
            'editorial' => 'RBA',
            'year' => 1975,
            'ebook' => 'Ursula_K._Le_Guin_-_Las_doce_moradas_del_viento.epub',
            'escritor_id' => $ursula->id,
        ]);

        DB::table('libros')->insert([
            'titulo' => 'Lavinia',
            'descripcion' => 'Lavinia crece sin conocer otra cosa que la paz y la libertad hasta la llegada de sus pretendientes. Su madre exige que contraiga matrimonio con el apuesto y ambicioso Turno. Pero los augurios y las profecías de los manantiales sagrados afirman que deberá casarse con un extranjero, que provocará una guerra y que su marido no vivirá demasiado tiempo. Al ver que una flota de barcos troyanos llega remontando el Tíber, la joven decide tomar las riendas de su propio destino. Y así nos cuenta lo que Virgilio no hizo: la historia de su vida y del amor de su vida. Le Guin da voz a este personaje surgido de la Eneida de Virgilio en una novela que nos transporta al mundo semisalvaje de la Italia antigua, cuando Roma no era más que una aldea mugrienta situada cerca de siete colinas.',
            'isbn' => '978-84-450-7735-1',
            'editorial' => 'Minotauro',
            'year' => 2008,
            'ebook' => 'Ursula K._Le_Guin_-_Lavinia.epub',
            'escritor_id' => $ursula->id,
        ]);

    }
}
