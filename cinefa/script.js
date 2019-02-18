<script src="/path/to/jquery.min.js"></script>
<script src="dist/autocomplete.js"></script>
<link rel="stylesheet" href="/path/to/bootstrap.min.css"></link>
<link rel="stylesheet" href="/path/to/font-awesome.min.css"></link>
<script type="text/javascript" src="script.js"></script>

const myData = [{
    "id": 1,
    "name": 'Item 1',
    "ignore": false
  },{
    "id": 2,
    "name": 'Item 2',
    "ignore": false
  },{
    "id": 3,
    "name": 'Item 3',
    "ignore": false
  },
  // ...
]

$('#search_b').autocomplete({
    nameProperty: 'name',
    valueField: '#hidden-field',
    dataSource: myData
  });

  $('#search_b').autocomplete({

    // name property
    nameProperty: 'name',
  
    // value property
    valueProperty: 'value',
  
    // selector or element
    valueField: null,
  
    // data source
    dataSource: null,
  
    // item filter
    filter: function (input, data) {
      return data.filter(x => ~x[this.options.nameProperty].toLowerCase().indexOf(input.toLowerCase()));
    },
  
    // trigger event
    filterOn: 'input',
  
    // called when the input is clicked
    openOnInput: true,
  
    // function(li, item)
    preAppendDataItem: null,
  
    // function(input, data) { ... }
    validation: null,
  
    // auto select the first matched item
    selectFirstMatch: false,
  
    // trigger element
    vali<a href="https://www.jqueryscript.net/time-clock/">date</a>On: 'blur',
  
    // called when selected
    onSelected: null,
  
    // class for invalid
    invalidClass: 'invalid',
  
    // triggered as soon as the initial value is selected
    initialValueSelectedEvent: 'initial-value-selected.autocomplete',
  
    // append to the body element
    appendToBody: false,
  
    // if true the dropdown will only show unique values. 
    distinct: false
    
  });