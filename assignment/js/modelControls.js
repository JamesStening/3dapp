function camera1()
{
	if (document.getElementById('model__Camera001').getAttribute('bind')) {
		document.getElementById('model__Camera001').setAttribute('bind', 'false');
	}
	document.getElementById('model__Camera001').setAttribute('bind', 'true');
}

function camera2()
{
	if (document.getElementById('model__Camera002').getAttribute('bind')) {
		document.getElementById('model__Camera002').setAttribute('bind', 'false');
	}
	document.getElementById('model__Camera002').setAttribute('bind', 'true');
}

function camera3()
{
	if (document.getElementById('model__Camera003').getAttribute('bind')) {
		document.getElementById('model__Camera003').setAttribute('bind', 'false');
	}
	document.getElementById('model__Camera003').setAttribute('bind', 'true');
}

function enter()
{
	document.getElementById('model__Line002').setAttribute('translation', '0,0,0');	
}


var lights = new Array(6).fill(true);
function light(l)
{
	if (l > 0)
	{
		changeL(l);
	}
	else
	{
		for (let l = 1; l < lights.length; l++)
		{
			lights[l] = false;
			changeL(l);
		}
	}
	
}

function changeL(l)
	{
		lights[l] = !lights[l];
		document.getElementById('model__Omni00' + l.toString()).setAttribute('on', lights[l] );
		if (lights[l])
		{
			document.getElementById('l' + l.toString()).setAttribute('class', "btn lightButtOn")
		}
		else
		{
			document.getElementById('l' + l.toString()).setAttribute('class', "btn lightButtOff")
		}
	}

var mTexture = true
function texture()
{
	if (mTexture)
	{
		document.getElementById('model__Line002-Texture').setAttribute('url', '"../sceneassets\\\\images/can_texture2.jpg"' );
		mTexture = false;
	}
	else
	{
		document.getElementById('model__Line002-Texture').setAttribute('url', '"../sceneassets\\\\images/can_texture.jpg"' );
		mTexture = true;
	}
}

function animation()
{
	document.getElementById('model__Line002-TIMER').setAttribute('startTime', 0)
}

function animationStart()
{
	document.getElementById('model__Line002-TIMER').setAttribute('cycleInterval', 3.333)
	document.getElementById('model__Line002-TIMER').setAttribute('startTime', 0)
}

function animationSlow()
{
	document.getElementById('model__Line002-TIMER').setAttribute('cycleInterval', 6.666)
	document.getElementById('model__Line002-TIMER').setAttribute('startTime', 0)
}







