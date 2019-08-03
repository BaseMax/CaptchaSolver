<?php
/**
*
* @Name : CaptchaSolver/download.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-08-03
* @Released under : https://github.com/BaseMax/CaptchaSolver/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/CaptchaSolver
*
**/
for($i=1;$i<=1000;$i++) {
	// $values=[
	// "__EVENTTARGET: ",
	// 	"__EVENTARGUMENT: ",
	// 	"__VIEWSTATE: 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",
	// 	"__VIEWSTATEENCRYPTED: ",
	// 	"__EVENTVALIDATION: zNs1xtK2TeTv/5a9+z8eDPNvDwKk1CLZJlLXJn01vpdfIXBK0ujm0/DopfXe4y+twexK4cvhIvbL+azKc0TRzzOG5o7J08svLu/sgS4fjvxdc2lQLCihZcBnFUKfPKnjM7lbwnAVyDCnfbQJz01ZBgq/w1VIictIXqmLLMglUOIeKGFmHeiDHAKN4GzHxQ9hrRVPv5g9/NYm21YG8j35Y/ZM1nN1SAGOSrzKJMxkJBKzdsJCqgKoTXeEWCsnOKx3+J6i1zI7mQdVNvGkuGthm7jPFlai3mya7mKSq2SxoyLvTQsVtzZGjR+kiXUzs4tfzzDIVGdVB36rtGfVnq8jMMcXVHTgIcB5SIEW27bt83YUb+HhfO2YkSqhIMbWGauxonPaPjFJzVrfB8IWg1faGkmyp5/OJnoARZeaOuCD36QCR67/Rv5fplwg+1RI+tL66LplhJP90TP6O94HPuLauW5jN1fXj4vbIQY8s4PmgMPSrHpK",
	// 	"d11c13db97afb50ba19a2575c5faf482"=>"9711170225",
	// 	"23e02b5592c7f7826fe17f554379ab3f"=>"1250589835",
	// 	"btnReGenerate"=>"new code",
	// 	"txtCaptchaText"=> "",
	// ];
	// $headers=[
	// 	"Cookie"=> "_ga=GA1.3.1935206565.1561539321; Jeton=fiw5ifywkrygunbvpcvcjdzx",
	// 	"Content-Type"=>"application/x-www-form-urlencoded",
	// ];
	// get("http://portal.system-site.com/");
	// get("http://portal.system-site.com/public.js");
	// get("http://portal.system-site.com/css/hidenetscape.css");
	// get("http://portal.system-site.com/App_Themes/Main/reset.css");
	// get("http://portal.system-site.com/WebResource.axd?d=XH4zedlS8cm_3vB7alxiHRpP51jPcipyUZiGEBPYPea4jxw38twMqXUKYUBKOpn_c1kMwxo7546TUXnWxybRWGEhCjQ1&t=634773866700000000");
	// get("http://portal.system-site.com/images/NewIcons/01d.png");
	// get("http://portal.system-site.com/ScriptResource.axd?d=i_3A4akydxMMy5fA-qdBYsUA17r84Xhh1qyCRbOFfCMCN9CKgGyEhUETeltKYLPLjt6dlDQCAp2BswqCi6ex-hfIgM9tzqMOFlJ-oQ1C9bOAeeuFZn8qnpc3hIVZ5DnnSc1ZhF_oy8akUcktzZKgalrnIZTc9OcirSZboYBaOYKRDBd50&t=6119e399");
	// get("http://portal.system-site.com/images/NewIcons/02d.png");
	// $captcha=file_get_contents("http://portal.system-site.com/GenCaptcha.ashx");
	// file_put_contents("captcha/". $i.".jpg", $captcha);
	exec("curl -b cookie.txt -c cookie.txt 'http://portal.system-site.com/' -H 'Connection: keep-alive' -H 'Cache-Control: max-age=0' -H 'Origin: http://portal.system-site.com' -H 'Upgrade-Insecure-Requests: 1' -H 'Content-Type: application/x-www-form-urlencoded' -H 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) snap Chromium/75.0.3770.100 Chrome/75.0.3770.100 Safari/537.36' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3' -H 'Referer: http://portal.system-site.com/' -H 'Accept-Encoding: gzip, deflate' -H 'Accept-Language: en,fa;q=0.9' -H 'Cookie: _ga=GA1.3.1935206565.1561539321; Jeton=fiw5ifywkrygunbvpcvcjdzx; PHPSESSID=3219ihv7dne30bmkrih3f9d9hr; _gid=GA1.3.2102881676.1564793478' --data '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=NLwE3aTtHwfhQv6naPd76wbfNi75kq%2BQg06zXgUPY9KjCO25Hb%2B0uzz6uu1oihqHlXsTqKfrlA37S5F4PWCShv%2FHciURV9%2FGK0kEdVzMcbELNXp9Ilj5afouwFjgv%2FNWNOZVz2ycHBMcnkUhXb0X7PaF%2BoKArlOYnvmI%2BStXb5BL2n9h%2FCmQPgUNVcVhUE6Ny3kKNYY10bg51ep59bdsiQEZ3j5TjD%2BwJKYCA%2B1Oo%2FeKYkDcUnOEGrw0anA2n4UqyW4egWiH6dSITLoSCq8dR1Tb8qjtLbBYc9rI4t1Glp6zMUrIH70njrMaUzJnejA9%2FwRttbyw%2FsdKzI8wpwK9ZuGbqFNFL4cwLnotbg6U6l%2FwOY97g4p8qT344rmV7m6ig1KZa7Q3JTbvWQcASKDnJ3vCI9llGDKaV6IIlh8mYF64UyT8DDGnNVSK9Q2HxpgH0EOlUPHbPZmm9kmZOjSfmzODAGHGllXoV7X6apjjx6cvk09FpKj3LNMfIMqoveLPMPC6oT5VFkqKFfrEoAGsdwR7e0eC1pN8YCQhPYbzA7UxfuKTQPN7X7DvWHEge%2B3iDVaBSsDwbesq4dFXFRBCViHkS3h0zsv4t%2B2x2Xw4ceXoaUx%2Bs6qp4ZOXFE4wiKM7naZ9QjJc4YoKAgf8Vlg4W5F9KgcG2t0bVkP95s%2FJzO0qsnE3EbLcliVmm9p%2B8VlI1%2BWhnotJv4mxk8ajesiZaJmOTEGUZNUtiP4xrezOWsxnMc7y9TAnjUw4Q%2BTG79i9rbCXo1qnhBCuCubwrrjMjKSCa8Z5sNnMCG1dJVE62%2BQllWtoNGoP8Fysy11e%2BOeD1HJDNNPRJoDnneSm4o%2FLRHJ7bFehx2sQa7Hbcrkv5j5x5wKqhEZRihtcRBB0ciy80AQhxErSP%2F3Ti%2F1btzPKwUX1rgoncKZ45zpoTtgClPWV%2Frx1vLrlZKjqlR3%2ByNUBk2aqvm4PcXqEy%2BVd0r%2FLPrQBG1xR1o3lMGTbA%2FLh7kEbdB5oGC%2Fh%2BVIehG13FwToy6twhvOa0JkOdS%2F4ix2INqffMQERz3lw2qyg6q%2F3LshN8q8T8siNBenWP4IFWoxjwiECZu%2FLdYH5iYugOa9v%2FTN1SDTBIYvGLuWGHXC5RAuBgmkmchuKchD39T%2FB83zQFu59tOwWEjbPdG0122bvoPI7gfMDojt95EeCvSAkx5UolViTCsI5n1r%2BPv7DM3iYn8t8z195l0hOun14LQ4IRURG0d2o%2BvTz8ffQr6%2FU%2FkmycsY97SjsJjwXT8i29lPnkkxiYLoFhetVfqqzWr1deyICmuVzTJjv2p1G1%2FDryHbStQqqmex5AQ2rQiV8TOrpnmQkGsARf7D%2Bd22conQEjN63WltVedVF4wk3FIZ7jHqmbxd6f%2FXaSSWOuj6TJrWuyGfRB2xzUWB0%2Bypbz3lj%2Fa8B%2Fi4Q91cIZg1Lv3ZzQpP8UTynY1JyZ8Bk3s2qxQrMR8aF6EiNP9pPmAufv7orKzlO1Z4g2EvjjPwrx43eWhnuqYXBZSNMZLmYCmD1J3hB1OCkRA7fPsbJ5ukLil35hYkC9nPVyzXJyb3cpYSLNjtNiQOPTBXAUFepu9%2BF4NCDpJqS2sN%2BFShZ%2FT3WQoYqLr4OCgyfuf%2BxrByWR5ckFfVtIpwSrh1iDBvPz91ycNW0CVNMWGe6qF%2B%2Fjp6zED7I1jMZYAMZBQ95Ux1XiP4sIDCKF7kMQUf0m9LYFhpDdU%2FvkLSBEANU4N0lGKlLxFZOm4n5xSUN%2FoVV4o8fNmWzIIQjUddvi8lmWu6k%2BQvbkRA2JJAN4dgbJ0p3gZt6jsSsXpNbnUSrdJ99fXOc%2B9K%2Fo43R6Ujf7ImfnQ%2FxR2klYt%2B8oe0DEju2XtWRzADxGWRhiKmbzBCClr3NSp%2FM9wrjE6KuoHppXqWSsZxMKdo6vwrMFrEwNqCXrRdX5mlsEhB2IsVHsVWiQdlzM2TsGsCnMuq4T0BC9%2FdtLyNvuA9Tj9lE6esTi88CxL%2F%2BnJiTqWY7nVJgN3sfAlt8pjYs7E%2BQdN%2BvnTbdWd4YYyXmZJ%2B6osDrPRpDfnr0lsJevw7SM9kzDsI522Eu34WEke5eW8z7R%2BhqEpjTwBWXk5Ls6geBCtrtDc4P%2FlD%2FpCr6meHGub1m8FfR78WCOAlYUuRN040eRBxeOxQ3QJR8LFSt1IXCd72nW1CIijRLttJnJlEWC9ohmTiDYY%2BNysdMpmrhK3ZcGQ6q0DSTpKGHMSXDcncFAJhLQd6yM4PFJYTC4VAPmBSxQRs%2F%2BfO0y1BDrMCpKn3eQnafDVfhwX4immMCSgv3ivYImSX9GC%2BIn6KM3%2BV4CynJZJ9w%2FY1ZHAE1ob1CAFcqlls6DPHecui8xVvSNZc6ofihJfjxO818epUsHTS94rJKbIJh%2FqE1y7smA2M0O%2B1Q7Eoxsme6NwapeVFpRvhFW5BGTmQRwIIJxR1vlguojldEJoPR7HOQOJskgrA%2FQ0jDF1WjgtB%2FThDSVZ7FzULUpxPOZmOm96C6dm7yBqJ67LicYuAaW7AxNAUDK05JsDlxbbfaH2gLlUUFB0WAZmz7nDQwD%2F3UunyIAnZIPKzgHgpWzj4SKKJTrh%2FI3tDxgJvXzOwXbCYyPIssANGJI1dclnODW%2BTitVwhqV7UxngfFC3eyhWsMar7ORaazIiUdp3HQ%2Flrw6syf5%2FABGDMK29DnvD5LJEq9Y5sPqLzikgcQB09G8Ihg4dBtEiw6HON95jXPybNJTwKIT4EJVAVXtFn1uZqtOGu%2BZylqyfka39JePEAmNa1wLyPsIa4c7Krr8JNeGTk5EE6iBnC8BaEAqUKAenhGoRwq1ey8Pu2EQeaLgh9E7eBR4lw%2BqW%2Bus%2FHEPin%2F03qf5XgA2SJSX8%2FmlLV5JiBF9WcqzXtVlFDhtobYBXXZh03vHRAEGreIVkJyzmhvRE5qOH0l%2Bwstdb6DGqb47Ibu4MOu9%2Ft4p3h9icYSxj1apoKMYHvEAWI%2FQ6DJWG6cVs9NFfPpTOlN1pZBCmQy5Iq92uz8%2FshTk2%2FVEMaa%2BRmnHjbOzep7w%2FH3WO7X2MJEDXUxedMVX4wdTtUcJ2F2ybCt3TfQZu9kgivDRcfR7YhS2fd4FGiPKp0JyFACoZjxOPVM0HjkMD5SQ%2FT%2FlhKpxFpBLIZHqghm%2BOCHL1PHO7%2BHXfUbU0Xg%2BylgH31RV3ngDJUr3HcQr64BLrannXo7bBoR%2FcZR17FA%2BGKpALSv8XEhhX7r3tRYqeTu%2BE9%2BJ95ztbMyNjfxRV%2FFjTppjMKDvUnhktPGrGLOq8wTPnrpz06zBrRuN8IngejqbIMnXiZP5kAvAP7S9eyRypSBq9PtUI1%2ByzBkodVuin3u8Tu9mJqKvriI8%2BrqAq28R0g5OaCYxRUg44zssx%2Fi0nAqQA3pntl%2FE0tsSv8vY9hCu9QLA8%2FjdSse6kU8BJrI2%2FgEWLsfiGBJVs1stDBfUGP6AJahHp%2FcaXm%2Bg%3D%3D&__VIEWSTATEENCRYPTED=&__EVENTVALIDATION=4Yfuj%2F1tF2s0nVs6cQd08%2FzRW7dAtO75W%2BswA8sati9HQRO2IKsc9OUzH0x%2BWMjJgNd8fgbZzHBHoM9CZkmE1xVnV3J7LhaNgsDluTk3CMCuq4dE16NHJIB6WtOQRYIeFNIhumEB7tO34rg6FW9NO4cT%2BBL8XVbS%2BR8jZ7YvIA8CRvZMwUn%2BB%2FNxqyZpb%2FSp2ZUR%2B06EELzC3YI3rt59MvEjhTFRi7TZn6IAD%2F8w0Catp73EW5WN0r3X182uJpTmZty8pER5iQWg%2FF3aNqxs3l%2BNvXppBEvhibdrjdCbfRLrta1jNz6F0YVtze8rd8YRV%2F8D5xv55pbmR0S9WxO35e1iaGi9tJsz859jh02nY%2FufAwwMcle1dPr3NCkOMwkbCZ0qMXpIwAyrvBIsy%2FtUpF6UH0OxUTLJVUeHieqXca04z7DRPMZ1V6nTNYCYnkXxpbnei3g0xdiMOitt%2FrFN5EzJtROKaOFAZk9Owvxkj5BRBwHh&d11c13db97afb50ba19a2575c5faf482=9711170225&23e02b5592c7f7826fe17f554379ab3f=1250589835&btnReGenerate=%DA%A9%D8%AF+%D8%AC%D8%AF%DB%8C%D8%AF&txtCaptchaText=' --compressed --insecure ");
	exec("curl -b cookie.txt -c cookie.txt http://portal.system-site.com/GenCaptcha.ashx > captcha/$i.jpg");
}
