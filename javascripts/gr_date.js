var myDate = new Date();
function gr_day() {
    var n = myDate.getDay();
    var day = '';
    switch(n) {
        case 1:
            day = 'Δευτέρα';
            break;
        case 2:
            day = 'Τρίτη';
            break;
        case 3:
            day = 'Τετάρτη';
            break;
        case 4:
            day = 'Πέμπτη';
            break;
        case 5:
            day = 'Παρασκευή';
            break;
        case 6:
            day = 'Σάββατο';
            break;
        case 0:
            day = 'Κυριακή';
            break;
    }
    return day;
}
function gr_month() {
    var n = myDate.getMonth();
    var month = '';
    switch(n) {
        case 0:
            month = 'Ιανουαρίου';
            break;
        case 1:
            month = 'Φεβρουαρίου';
            break;
        case 2:
            month = 'Μαρτίου';
            break;
        case 3:
            month = 'Απριλίου';
            break;
        case 4:
            month = 'Μαΐου';
            break;
        case 5:
            month = 'Ιουνίου';
            break;
        case 6:
            month = 'Ιουλίου';
            break;
        case 7:
            month = 'Αυγούστου';
            break;
        case 8:
            month = 'Σεπτεμβρίου';
            break;
        case 9:
            month = 'Οκτομβρίου';
            break;
        case 10:
            month = 'Νοεμβρίου';
            break;
        case 11:
            month = 'Δεκεμβρίου';
            break;
    }
    return month;
}
function gr_date() {
    var date_str = gr_day() + ', ' + myDate.getDate() + " " + gr_month() + " " + myDate.getFullYear();
    document.write(date_str);
}