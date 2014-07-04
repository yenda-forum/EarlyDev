{include file="header.tpl"}
{foreach $forums as $key => $item} 
    
    {$item['name']}<br>
    {$item['description']}<br>
    {$item['lastPost']}<br><br>

{/foreach}

{include file="footer.tpl"}
    