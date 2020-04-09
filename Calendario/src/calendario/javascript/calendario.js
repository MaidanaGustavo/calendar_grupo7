var dt = new Date();
function Renderizar(){
var day = dt.getDay();
console.log(dt.getDay());
var endDate = new Date(
	dt.getFullYear(),
	dt.getMonth()+1,
	0
).getDate();
var prevDate = new Date(
	dt.getFullYear(),
	dt.getMonth(),
	0
).getDate();
var hoje = new Date();
var meses  = [
	"Janeiro",
	"Fevereiro",
	"Março",
	"Abril",
	"Maio",
	"Junho",
	"Julho",
	"Agosto",
	"Setembro",
	"Outubro",
	"Novembro",
	"Dezembro"
];
var dias = [
	"Dom",
	"Seg",
	"Ter",
	"Qua",
	"Qui",
	"Sex",
	"Sab"
];

document.getElementById("data_atual").innerHTML = dias[dt.getDay()]+", "+dt.getDate()+" de "+meses[dt.getMonth()]+" de "+
dt.getFullYear();
console.log(dias[dt.getDay()]+", "+dt.getDate()+" de "+meses[dt.getMonth()]+" de "+
dt.getFullYear())
document.getElementById("mes").innerHTML = meses[dt.getMonth()];


var ds = "";
for(x=day;x>0;x--){
	ds += "<div class = 'data_anterior'>"+(prevDate - x +1)+"</div>";
}
for(i=1;i<=endDate;i++){
	if(i == hoje.getDate() &&  dt.getMonth()==hoje.getMonth()){
		ds+= "<div class = 'hoje'>"+i+"</div>";
	}else{
		ds+= "<div>"+i+"</div>";
	}
}

document.getElementsByClassName("dias")[0].innerHTML = ds;
}

function moveDate(para){
	if(para == 'voltar'){
		dt.setMonth(dt.getMonth()-1);
	}else if(para == 'proximo'){
		dt.setMonth(dt.getMonth()+1);
	}
	Renderizar();
}