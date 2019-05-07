function  GameGues() {
    var n = prompt("mời bạn đoán số: (1->10):")
    var r = Math.round(10*Math.random());
        if (n==r)
            alert("tuyệt ! bạn đã đoán đúng rồi");
        else
            alert ("sai rồi, số ra là "+ r +" chúc bạn may mắn lần sau")
}