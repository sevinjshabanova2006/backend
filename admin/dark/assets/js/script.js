function Sweet(){
    let name = location.href;
    let url = new URL(name);
    let status = url.searchParams.get("status");
    console.log(status);

    if(status="ok"){
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
        });
        // setTimeout(Sil,2000);
    }
    else{
        swal({
            title: "Sorry!",
            text: "You clicked the button!",
            icon: "error",
            button: "Oh no!",
        });
        // setTimeout(Sil,2000);
    }
    function Sil(){
        console.log("a");
        location.href = location.protocol + "//" + location.host + location.pathname;
        // http://localhost/backend2/admin/dark/category.php?status=ok
    }
}

Sweet();