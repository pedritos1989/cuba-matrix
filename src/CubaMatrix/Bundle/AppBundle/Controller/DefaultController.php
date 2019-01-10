<?php

namespace CubaMatrix\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function aboutAction()
    {
        return $this->render('CubaMatrixAppBundle:Default:about.html.twig');
    }

    public function indexTaxonsAction()
    {
        return $this->render('@CubaMatrixApp/Category/index.html.twig');
    }

    public function indexOffersAction()
    {
        return $this->render('@CubaMatrixApp/Offer/index.html.twig');
    }

    public function conditionsAction()
    {
        return $this->render('CubaMatrixAppBundle:Default:conditions.html.twig', array(
            'conditions' => array(
                '1.' => 'Usted ha leído, entendido, reconocido y aceptado nuestros Términos de uso (disponibles en <a href="' . $this->generateUrl('terms_&_conditions') . '">www.cubamatrix.com/terminos</a>) al momento de registrarse y acceder a nuestro sitio web.',
                '2.' => 'La siguiente terminología se aplica a estos Términos y Condiciones, Declaración de Privacidad, Aviso de Exención y cualquiera o todos los Acuerdos: "Cliente", "Usted", "Su" significa Usted, la persona que accede a este Sitio Web y acepta los términos y condiciones del Cuba Matrix, LLC. "La Compañía", "Nosotros", se refiere a nuestra empresa Cuba Matrix, LLC. "Parte", "usted" o "suyo", se refiere tanto al Cliente como a nosotros. Cualquier uso de la terminología mencionada anteriormente o cualquier palabra en singular, plural, el uso de mayúsculas y / o él o ellos, se consideran intercambiables y por lo tanto se refieren a la misma.',
                '3.' => 'Todas las ventas son finales y no están sujetas a devolución para reembolso o cambio.',
                '4.' => 'Todos los bienes comprados por usted a través de este sitio web se proporcionan "tal cual". No ofrecemos ninguna garantía o representación con respecto a los productos y expresamente renunciamos a todas las demás garantías y condiciones, expresas o implícitas, legales o de otro tipo, de cualquier tipo o naturaleza, incluidas, entre otras, todas y cada una de las garantías implícitas, incluidas las garantías implícitas de comerciabilidad y aptitud para un propósito particular. Si no podemos negar o excluir legalmente las garantías implícitas según la ley aplicable, entonces, en la medida de lo posible, la duración de dichas garantías implícitas caducará treinta (15) días después de la entrega.',
                '5.' => 'El envío de sus productos y paquetes será procesado por nuestro personal a le menos brevedad posible y en el marco de tiempo especificado en el momento de la compra. Con respecto al envío de sus productos y paquetes es simplemente una estimación y puede variar dependiendo de cuándo el Transportista procesó los bienes y paquetes y cuándo se realizó su pedido en relación con el envío más reciente del Transportista a Cuba. No somos responsables de las demoras y retrasos en el tiempo de entrega al destino en Cuba.',
                '6.' => 'Es su única y exclusiva responsabilidad garantizar que toda la información que nos envíe sea: (a) precisa; (b) correcto; (c) actual; (d) de acuerdo con nuestros Términos de uso; y (e) de acuerdo con todas las leyes aplicables, incluidas las leyes de importación y exportación de los Estados Unidos y Cuba, incluidas las sanciones y las leyes Contra Lavado de Activos (AML). Si no lo hace, infringe nuestros Términos de uso. No somos responsables de ninguna información en su declaración de aduanas, ningún daño y / o responsabilidad resultante de su declaración de aduana, despacho de aduana en el destino en Cuba, incautaciones por la aduana en los EE. UU. o Cuba, y recaudación de impuestos, aranceles, aranceles y procesamiento en el destino en Cuba.',
                '7.' => 'Ni usted, el destinatario final de ningún bien comprado en este sitio web, ni ningún agente u otra persona que actúe en nombre de lo anterior, es una persona que es un objetivo de sanciones o un funcionario prohibido.',
                '8.' => 'Todas las compras de bienes hechas por usted a través de este sitio web y todas las encomiendas recibidas o entregadas por el transportista serán para regalos o donaciones a una organización individual, religiosa, caritativa o educativa ubicada en Cuba para el uso del donatario o del donatario. familia inmediata (y no para reventa). El paquete y todos los productos que lo componen deben ser entregados sin cargo al donatario.',
                '9.' => 'Todas las compras de bienes hechas por usted a través de este sitio web y todas las encomiendas recibidas o entregadas por el transportista serán colocadas y enviadas por usted a título personal y no con fines comerciales, comerciales, minoristas o de reventa.',
                '10.' => 'Declaración de privacidad: Estamos comprometidos a proteger y asegurar su privacidad. Los empleados autorizados dentro de nuestra compañía que necesiten su información sólo obtendrán esta información de clientes individuales. Constantemente revisamos nuestros sistemas y bases de datos para asegurar el mejor servicio posible a nuestros clientes.',
                '11.' => 'Confidencialidad: Cualquier información sobre el Cliente y sus respectivos registros puede ser aprobada por medio y a través de terceros. Los clientes tienen derecho a solicitar una reunión y revisar en persona copias que nuestra Compañía pueda tener en posesión de sus datos y registros, si se da un aviso razonable de dicha solicitud. Los clientes deben conservar copias de toda la literatura relativa a los términos y condiciones de nuestros servicios. Al utilizar y comprar cualquier artículo del Sitio Web, el Cliente está de acuerdo con los términos y condiciones aquí establecidos, y si el Cliente no acepta dichos términos, la Compañía no realizará transacciones con dicha persona o negocio.',
                '12.' => 'Exención de responsabilidad, exclusiones y limitaciones: La información de este sitio web se proporciona "tal cual", totalmente permitida por la ley, esta empresa. Excluye todas y cada una de las representaciones y garantías de cualquier tipo relacionadas con este sitio web, contenido y / o cualquier producto vendido, o lo que es o puede ser proporcionado por cualquier afiliado y / o cualquier otro tercero, incluyendo, pero no limitado a omisión o error en este sitio web. Por este medio, los clientes renuncian a cualquier reclamación sobre cualquier responsabilidad por daños y perjuicios derivados de, o relacionados con el uso de este sitio web. Esto incluye, pero no se limita a, pérdidas directas, pérdidas de ganancias empresariales (si la pérdida de esos beneficios era o eran previsibles, ocurrió en el curso ordinario de los negocios, o de otro modo), daños consecuentes, daños a su computadora, Sistemas y programas o cualquier otra pérdida (directa o indirecta) por cualquier motivo. Sin perjuicio de lo anterior, bajo ninguna circunstancia, en caso de que se permita una reclamación legal, el daño máximo no puede ser mayor que el valor de compra del artículo comprado en el Sitio Web.',
                '13.' => 'Pagos: Toda la mercancía sigue siendo propiedad de la empresa hasta que se paga en su totalidad. Nos reservamos el derecho de solicitar el reembolso de las cantidades no pagadas hasta treinta (30) días a partir de la fecha de la factura a través de agencias de cobro, a través de recortes de reclamaciones, o a través de los esfuerzos de un abogado. Los cheques devueltos tendrán un cargo de $35.00 para cubrir los gastos bancarios y los costos administrativos. En caso de devolución de un segundo cheque, nos reservamos el derecho de rescindir los acuerdos y, en caso de acuerdo, podemos insistir en que las transacciones futuras se paguen únicamente en efectivo. Por lo tanto, todas las reservas y / o transacciones, y todos acuerdos terminarán, con efecto inmediato hasta que todos y cada uno de los fondos pendientes se recuperen completamente.',
                '14.' => 'Política de cancelación: Se requiere un aviso de cancelación mínima de 48 horas desde la compra, salvo que se disponga lo contrario en estos términos y condiciones. Gastos de cancelación pueden aplicar en función del servicio.<br>
Los reembolsos por cancelaciones después de las 24 horas desde el momento de la Orden, y antes de término del servicio, serán penalizados con el quince por ciento (15%) del valor total de la Orden, ya que los servicios se consideran iniciados y, para todos los efectos, están en curso.<br>
Como norma, en todo caso que se acepte la solicitud de cancelación del servicio por parte del cliente, no se harán devoluciones del dinero pagado por el cliente, en todo caso, deducidos los posibles cargos por cancelación, el monto pagado por el mismo quedará como crédito disponible a favor del cliente para ser utilizado en nuevos servicios.<br>
Ante demoras en las entregas que superen los ciento veinte (365) días hábiles, o por otras causas de fuerza mayor, Cuba Matrix podrá aceptar solicitudes de devolución de los clientes. Para estos casos las devoluciones se efectuarán por el total de la Orden, y siempre mediante cheque emitido a nombre de la persona que pagó el servicio, salvo casos excepcionales de clientes fuera de los Estados Unidos de América en que se podrá realizar por transferencia bancaria siempre que el cliente asuma los costos asociados a la mencionada transferencia.<br>
Las solicitudes de cancelación únicamente se recibirán por escrito, y pueden ser enviadas por correo electrónico al Email: sales@cubamatrix.com, o presentada directamente en las oficinas de Cuba Matrix LLC en Miami, Florida, en cuyo caso el cliente llenará y firmará la forma correspondiente.<br>
El plazo de emisión del documento de pago será de treinta (30) días hábiles contados desde el momento en que se reciba la solicitud de cancelación, tiempo en el cual Cuba Matrix tiene que realizar las investigaciones pertinentes para conocer el estado de la carga, hacer los cambios legales de nomenclatura y datos oficiales de acuerdo a lo establecido en las legislaciones de los Estados Unidos de América y la República de Cuba, hacer los ajustes contables pertinentes y elaborar la documentación necesaria.
',
                '15.' => 'Peligro fraude: El fraude con tarjeta de crédito es un delito. Nuestra empresa Cuba Matrix LLC no se hace responsable del contenido y la disponibilidad de los sitios web a los que se vincula fuera de su página, de cualquier daño o pérdida que pudiera derivarse de la conexión o el uso de cualquier contenido, producto o servicio disponible en los sitios web que los enlaces están dirigidos.',
                '16.' => 'Uso de cookies: El uso de nuestro sitio web requiere el uso de cookies. Las cookies tendrán el propósito de obtener información sobre las secciones visitadas, el tiempo que queda en nuestra web y otros datos estadísticos. Si lo desea, puede configurar su navegador para que se le avise en la pantalla de recepción de cookies y para evitar la instalación de cookies en su disco duro. Consulte las instrucciones y los anuarios de su navegador para obtener más información.',
                '17.' => 'Aviso de copyright: Los derechos de autor y otros derechos de propiedad intelectual pertinentes existen en todo el texto relacionado con los servicios de la empresa y el contenido completo de este sitio web.',
                '18.' => 'Comunicación: Puede comunicarse con nosotros vía telefónica o por correo electrónico para las diferentes consultas que desea realizar. El correo electrónico y cualquier otra información de contacto pueden encontrarse en nuestro enlace "Contáctenos" en nuestro sitio web.',
                '19.' => 'Responsabilidad por el funcionamiento del sitio web: Cuba Matrix LLC, no será responsable en caso de interrupciones del servicio, o mal funcionamiento de este que se originen en casos de evento imprevisible, fuerza mayor, u otras causas que escapen a su control. Esto incluye interrupciones y retrasos en las entregas de los corresponsales e importadores de los países de destino de las cargas causadas por averías de equipos, huelgas, y otras causas fuera de Cuba Matrix LLC. Además, la Compañía está obligada por las normas y reglamentos vigentes en los países a los que los estén siendo enviados. La Compañía no se hace responsable de cualquier cambio en dichas regulaciones de importación o la denegación de la entrada de cualquier artículo en un país.',
                '20.' => 'Renuncia de Responsabilidad: Los contenidos incorporados al sitio web se han producido siempre de buena fe con el fin de dar información a los usuarios, Cuba Matrix LLC, renuncia a toda responsabilidad, en cualquier forma, en relación con la prestación de dicha información.',
                '21.' => 'Fuerza Mayor: Ninguna de las partes será responsable frente a la otra por cualquier incumplimiento de cualquiera de las obligaciones bajo cualquier acuerdo que se deba a un evento fuera del control de esa parte, pero no se limita a, Acto de Dios, Terrorismo, Guerra, Política de Insurrección, Huelga, Conflicto Civil, Ley de la Autoridad Civil o Militar, Levantamiento, Terremoto, Inundación, o cualquier otra ocurrencia natural o hecha por el hombre fuera de nuestro control, resultando en la cancelación de nuestro acuerdo. Cualquier parte afectada por tales eventos notificará inmediatamente a la otra parte y hará todos los esfuerzos razonables para cumplir con los términos y condiciones de cualquier acuerdo contenido en el contrato.',
                '22.' => 'Ley aplicable y estipulación de jurisdicción: Este acuerdo se regirá por las leyes del Estado de la Florida. Las partes se someterán a la jurisdicción de los tribunales del Estado de la Florida y a la jurisdicción exclusiva del undécimo circuito judicial del condado de Miami-Dade, Florida, con el propósito de litigar cualquier asunto que surja a través o bajo este acuerdo. En el caso de que la Compañía contrate a cualquier abogado para hacer cumplir o interpretar cualquier disposición de este acuerdo, el Cliente pagará todos los honorarios y costos razonables de abogados incurridos por la Compañía para hacer cumplir las provisiones aquí incluidas las incurridas en cualquier procedimiento de quiebra o apelación.',
                '23.' => 'Notificación de cambios: La Compañía se reserva el derecho de cambiar estos términos de tiempo en tiempo, según lo considere apropiado, y su uso continuo del sitio web implicará la aceptación de cualquier ajuste a estos términos. Si hay algún cambio en nuestra política de privacidad, anunciaremos que dichos cambios se han realizado en nuestro sitio web principal y en otras páginas clave de nuestro sitio. Si hay algún cambio en la forma en que se utiliza nuestro sitio web, la información de identificación personal de nuestros clientes, notificaciones por correo electrónico o correo postal se hará a los afectados por dichos cambios. Cualquier cambio en nuestra política de privacidad se publicará en nuestro sitio web 30 días antes de que se produzcan dichas modificaciones. Por lo tanto, se le aconseja releer esta declaración periódica y regularmente, para estar al tanto de cualquier cambio en ella.',
            )));
    }

    public function questionsAction()
    {
        return $this->render('CubaMatrixAppBundle:Default:questions.html.twig');
    }

    public function deliveryAction()
    {
        return $this->render('CubaMatrixAppBundle:Default:delivery.html.twig');
    }

}
