addEvent(window,'load',inicializarEventos,false);
function inicializarEventos()
{
	var ob;
	for(f=1;f<=12;f++)
	{
		ob=document.getElementById('enlace'+f);
		addEvent(ob,'click',presionEnlace,false);
	}
}
function presionEnlace(e)
{
	if (window.event)
	{
		window.event.returnValue=false;
		var url=window.event.srcElement.getAttribute('href');
		cargarHoroscopo(url);
	}
	else
		if (e)
		{
			e.preventDefault();
			var url=e.target.getAttribute('href');
			cargarHoroscopo(url);
		}
}
var conexion1;
function cargarHoroscopo(url)
{
	if(url=='')
		return;
	conexion1=crearXMLHttpRequest();
	conexion1.onreadystatechange = procesarEventos;
	conexion1.open("GET", url, true);
	conexion1.send(null);
}
function procesarEventos()
{
	var detalles = document.getElementById("detalles");
	if(conexion1.readyState == 4)
		detalles.innerHTML = conexion1.responseText;
	else
		detalles.innerHTML = 'Cargando...';
}
//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
	if (elemento.attachEvent)
	{
		elemento.attachEvent('on'+nomevento,funcion);
		return true;
	}
	else
		if (elemento.addEventListener)
		{
			elemento.addEventListener(nomevento,funcion,captura);
			return true;
		}
		else
			return false;
}
function crearXMLHttpRequest()
{
	var xmlHttp=null;
	if (window.ActiveXObject)
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	else
		if (window.XMLHttpRequest)
			xmlHttp = new XMLHttpRequest();
		return xmlHttp;
}

 function mostrar(obj)
    {
      while(obj.nextSibling != null && obj.className != "tooltip")
        obj = obj.nextSibling;
      if(obj != null)
        obj.style.display = "inline";
    }

    function ocultar(obj)
    {
      while(obj.nextSibling != null && obj.className != "tooltip")
        obj = obj.nextSibling;
      if (obj != null)
        obj.style.display = "none";
    }

function add_li()
    {
        var nuevoLi=document.getElementById("nuevo_li").value;
        if(nuevoLi.length>0)
        {
            if(find_li(nuevoLi))
            {
                var li=document.createElement('li');
                li.id=nuevoLi;
                li.innerHTML="<span onclick='eliminar(this)'>X</span>"+nuevoLi;
                document.getElementById("listaDesordenada").appendChild(li);
            }
        }
        return false;
    }

    function find_li(contenido)
    {
        var el = document.getElementById("listaDesordenada").getElementsByTagName("li");

        for (var i=0; i<el.length; i++)
        {
            if(el[i].id==contenido)
                return false;
        }
        return true;
    }

    function eliminar(elemento)
    {
        var id=elemento.parentNode.getAttribute("id");
        node=document.getElementById(id);
        node.parentNode.removeChild(node);
    }
