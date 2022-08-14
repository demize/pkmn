<?php
// List of legendaries from all generations (in lowercase)
$legendaries = array('articuno','zapdos','moltres','mewtwo','mew','raikou','entei'
                    ,'suicune','lugia','ho-oh','celebi','regirock','regice','registeel'
                    ,'latias','latios','kyogre','groudon','rayquaza','jirachi','deoxys'
                    ,'uxie','mesprit','azelf','dialga','palkia','heatran','regigigas'
                    ,'giratina','cresselia','phione','manaphy','darkrai','shaymin'
                    ,'arceus','victini','cobalion','terrakion','virizion','tornadus'
                    ,'thundurus','reshiram','zekrom','landorus','kyurem','keldeo'
                    ,'meloetta','genesect','xerneas','yveltal','zygarde','diancie'
                    ,'hoopa','volcanion','type: null','type null','typenull','sylvally'
                    ,'tapu koko','tapu lele','tapu bulu','tapu fini','cosmog','cosmoem'
                    ,'solgaleo','lunala','nihilego','buzzwhole','pheromosa','xurkitree'
                    ,'celesteela','kartana','guzzlord','nekrozma','magearna'
                    ,'marshadow','poipole','naganadel','stakataka','blacephalon'
                    ,'zeraora','meltan','melmetal','zacian','zamazenta','eternatus'
                    ,'kubfu','urshifu','zarude','regieleki','regidrago','glastrier'
                    ,'spectrier','calyrex','enamorus');

// Make sure there was a query parameter passed, otherwise just return nothing
if(!isset($_GET['pkmn']) || strlen(trim($_GET['pkmn'])) < 1) {
    echo "You didn't specify a pokemon";
    return;
}

// Set up our return value
$rv = "";

// If a user parameter was provided, add it to the return value (escaped)
if(isset($_GET['user'])) {
    $rv = $rv . "@" . htmlspecialchars($_GET['user'], ENT_QUOTES) . " ";
}

// Escape HTML characters in the pkmn parameter
$pkmn = htmlspecialchars($_GET['pkmn'], ENT_QUOTES);

// Check the array and return appropriately
if (in_array(strtolower($pkmn), $legendaries)) {
    $rv = $rv . $pkmn . " is a legendary";
} else {
    $rv = $rv . $pkmn . " is NOT a legendary";
}

echo $rv;

?>