
    $(document).ready(function() {
        $("#hideInput").click(function() {
            $(".input").toggle(200);
            $(this).text(function(i, text) {
                return text === "Show Input" ? "Hide Input" : "Show Input";
            });
        });

    });


    $(document).ready(function() {
        $("#hideNotes").click(function() {
            $(".noteEven, .noteOdd").toggle(200);
            $(this).text(function(i, text) {
                return text === "Show Notes" ? "Hide Notes" : "Show Notes";
            });
        });
        
    });
