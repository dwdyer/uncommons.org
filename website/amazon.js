addEvent(window, 'load', initAmazonLinks);

var ukAddress = 'http://www.amazon.co.uk/exec/obidos/ASIN/';
var usAddress = 'http://www.amazon.com/exec/obidos/ASIN/';
var ukId = 'uncommonsorg-21';
var usId = 'uncommonsorg-20';

function initAmazonLinks()
{
    // If timezone is GMT or GMT + 1 hour assume UK, otherwise US.
    var timezone = new Date().getTimezoneOffset();
    var isUk = (timezone <= 0 && timezone >= -60);
    
    var links = document.getElementsByTagName('a');
    for(var i = 0; i < links.length; i++) 
    {
        if (links[i].href.search('asin://') == 0)
        {
            links[i].href = links[i].href.replace('asin://', (isUk ? ukAddress : usAddress));
            links[i].href = links[i].href.concat('/', (isUk ? ukId : usId));
        }
        else if (!isUk && links[i].href.search(ukAddress) == 0)
        {
            links[i].href = links[i].href.replace(ukAddress, usAddress);
            links[i].href = links[i].href.replace(ukId, usId);
        }
    };
}

// http://onlinetools.org/articles/unobtrusivejavascript/chapter4.html
function addEvent(obj, evType, fn)
{ 
    if (obj.addEventListener)
    { 
        obj.addEventListener(evType, fn, false); 
        return true; 
    }
    else if (obj.attachEvent)
    { 
        var r = obj.attachEvent("on"+evType, fn); 
        return r; 
    }
    else
    { 
        return false; 
    } 
}

