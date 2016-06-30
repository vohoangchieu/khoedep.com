$("ul.sdcollections-list > li").each(function () {
    var a = $(this).find("a.site-nav__link");
    var categoryurltmp = (a.attr("href"));
    if (!categoryurltmp) {
        return;
    }
//    console.log(href);
    var categoryurl = categoryurltmp.replace("/collections/", "");
//    console.log(href1);
    var categoryname = a.find(".collection-name").text().trim();
//    console.log(categoryname);
    var sql = "insert into category(url,name,urltmp) values('" + categoryurl + "','" + categoryname + "','" + categoryurltmp + "');";
    console.log(sql);
    $(this).find(".list-unstyled a").each(function () {
        var subcategoryurl= $(this).attr("href").replace("/collections/", "");
        var subcategoryname= $(this).text();
        var subcategoryurltmp=$(this).attr("href");
//        console.log("		" + $(this).attr("href"));
//        console.log("		" + $(this).attr("href").replace("/collections/", ""));
//        console.log("		" + $(this).text());
        
         var sql = "insert into subcategory(url,name,category,urltmp) values('" + subcategoryurl + "','" + subcategoryname + "','"+ categoryurl + "','" + subcategoryurltmp + "');";
         console.log(sql);
    });
})