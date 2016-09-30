<?php 

return  [

    'sitename' => 'I-OPAC',

    'siteimage' => 'iopac.jpg',

    // how many items to show per page in search results list
    'search_items_per_page' => 20,
 
    // the fields per result to show in the search results list
    // format: [marcfield] => [marcsubfield, linkable to new search, repeatable]
    // default: title of the item, name of the author and subject(s)
    'marcfield_ids' => [
        '200' => ['a', false, false], 
        '700' => ['a', true, false], 
        '605' => ['a', true, true]
    ],

    // the fields to show in the footer table of each item in search results list
    // format: [marcfield] => [marcsubfield]
    'marcfield_footer' => [
        '200' => ['a'],
        '700' => ['a'],
        '605' => ['a']
    ],


    // the fields to show in the footer table of each item in search results list
    // format: [marcfield] => [marcsubfield]
    'marcfield_search' => [
        ['200', 'a', 'Título'],
        ['700', 'a', 'Autor'],
        ['605', 'a', 'Assunto']
    ],
];
