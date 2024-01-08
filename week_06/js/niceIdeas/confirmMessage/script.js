let confirmMsg=confirm("Are you sure?");
console.log(confirmMsg);// it return true or false accoring to ahat you choose

if(confirmMsg===true)
{
    console.log("Item deleted");
}else{
    console.log("Item not deleted");
}