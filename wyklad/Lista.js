console.log("Bawimy sie prosta lista");
/*
* Konstruktor elementu listy
*/
function listNode(info, next){
  this.info = info;
  this.next = next;
}

listNode.prototype.show = function(){
  console.log(this.info);
}


function initList(info){
  var x = new listNode(info,undefined);
  return x;
}

function listAdd(info, list){
  var x = new listNode(info,list);
  return x;
}

// Inicjujemy liste
var L = initList("e1");
console.log(L);
L.show();
// zapamietujemy ostatni element
var Last = L;

L = listAdd("e2",L);
L.show();

L = listAdd("e3",L);
L.show();

console.log("\nLISTA:\n", L);

console.log("\nPrzegladam liste");
var X = L;
X.show();
while (X.next !== undefined) {
  X = X.next;
  X.show();
}

// Robimy teraz cos dziwnego: zapetlamy liste
Last.next = L;
// oraz dodajemy jeszcze ze dwa elementy na poczatku
L = listAdd("e4",L);
console.log(L.info);
L = listAdd("e5",L);
console.log(L.info);

console.log("\nLISTA:\n", L);



