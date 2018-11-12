export default class Create {
    constructor() {
        this.affCache();
        this.exportCSV();
    }

    affCache(){
        $(".choix").click( (e) => {
            let target = '#' + $(e.currentTarget).data('targetId');
            $('.formulaire_cache').hide();
            $(target).show();
            $(window).scrollTop($(target).offset().top)
        })
    }

    exportCSV(){
        $("#ExportCsv").click(function(){
            $.ajax({
                url : 'http://127.0.0.1:8000/Export',
                type : 'POST',
            });
        });
    }
}