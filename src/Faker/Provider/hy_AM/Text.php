<?php

namespace Faker\Provider\hy_AM;

class Text extends \Faker\Provider\Text
{
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        $realText = parent::realText($maxNbChars, $indexSize);

        return iconv('UTF-8', 'UTF-8//IGNORE', $realText);
    }
    
    /**
     * From ru.wikisource.org
     *
     * Текст доступен по лицензии Creative Commons Attribution-ShareAlike,
     * в отдельных случаях могут действовать дополнительные условия.
     * Подробнее см. Условия использования.
     *
     *
     * Title: Мертвые души
     *
     * Author: Гоголь Николай
     *
     * Posting Date: May 20, 2008
     * [Last updated: August 2, 2012]
     *
     * Language: Russian
     *
     * @see     https://wikimediafoundation.org/wiki/Terms_of_Use/
     * @link    http://ru.wikisource.org/wiki/%D0%9C%D1%91%D1%80%D1%82%D0%B2%D1%8B%D0%B5_%D0%B4%D1%83%D1%88%D0%B8_(%D0%93%D0%BE%D0%B3%D0%BE%D0%BB%D1%8C)/%D0%A2%D0%BE%D0%BC_I/%D0%93%D0%BB%D0%B0%D0%B2%D0%B0_I
     * @var string
     */
    protected static $baseText = <<<'EOT'

Հուլիսի	շոգ	օրերից	մինն	էր: Արևն	այնպես	էր	այրում, ասես	մտադիր	էր	կրակ	թափելու	արտերի	ու	այգիների	վրա, ծծելու	գետերի	ջրերը, որպեսզի	գոմեշները	չկարողանան	թաղվել	ջրի	մեջ	և իրենց	հաստ	կաշին	ազատել	արևի	խանձող	շողերից: Ո՞վ	գիտե, արևն	ուիրշ	էլ	ի՜նչ	մտադրություն	ուներ, սակայն	կարևորն	այն	է, որ	հուլիսի	այդ	շոգ	օրին, արևի	տակ, ժամանակը	կորել	էր, հալվել, անհնար	էր	որոշել	ժամը, թեկուզ	ժամացույները	զարկում	էին	դողէրոցքով	տառապողի	թույլ	երակի	պես:

Եվ	երբ	գանցքը	փշոտ	ճամփով	գլորվող	գոմշասայլի	պես	մոտեցավ	կայարանին, հերթապահին	թվաց, թե	ցեխի	մեջ	թաթախված	գոմեշների	մի	երամակ	ահռելի	փնչոցով	կանգնեց	կայարանի առաջ, փնչոցո՜վ, որ	նշանակում	էր` օ՛ֆ, շոգ	է:

Ինչքա՛ն	դանդաղ	ու	չկամ, գնացքից	դուրս	եկան	ուղևորները, որը	քրտինքը	սրբելով, որը	բաճկոնի	կոճակները	մինչև	գոտին	արձակած, մի	խուրջին	ուսին, թաշկինակով	կրծքին	հով	անելով: Կայարանի	ստվերում	թիկն	տված	երկու	մուշտ	հենց	այդտեղից	էլ	ձայն	տվին	իջնող	ուղևորների, թե	ո՞վ	իր	ունի	տանելու, և	երբ	պատասխան	չեղավ, նորից	գլուխները	թեքեցին, թառամած արևածաղկի	պես:

Ոչնչով	հիշատակելի	չէր	դառնա	հուլիսյան	այդ	շոգ	օրը, եթե	գնացքը, որպես	թանկագին	բեռ, շատ	զգուշությամբ	այդ	օրը	չբերեր	Հովնաթան	Մարչին: Եվ	այդ	նրա	ամերիկյան	դեղին	կոշիկը դիպավ	գետնին, կոշիկը	տերը	ժպտաց: Հավանորեն	այդ	ժպիտն	ունեցավ	և	Կոլումբոսը` նոր	ցամաքի	վրա	առաջին	անգամ	ոտք	դնելիս:

Եվ	ոչ	ոք	չնկատեց, թե	ինչպե՜ս	նա	դարձավ	Արարատի	կողմը	և, հասկանու՞մ	եք, ձեռքով	սալամ	ուղարկեց	հեռու	սարին: Սակայն	նրա	ողջույնը	միայն	ձեռքի	շարժումով	չվերջացավ: Եթե	մոտիկ կանգնած	մարդ	լիներ, նա	կլսեր, թե	ինչպես	Մարչն	ասաց. «Օ՛, Արմենիա, երկիր	դրախտավայր»…	Ասաց	ու	քրտինքի	մի	կաթիլ	գլորվեց	այս	երկրի	արևից	խանձված	հողին:

Ծովի	մի	ալիք, նույնիսկ	այն	ժամանակ, երբ	հանդարտ	է	ծովը, հանկարծ	ափ	է	նետումհեռու	երկրից	ծովն	ընկած	պտուղի	մի	կճեպ, այդ	ափին	կճեպը	մնում	է	այնքան, մինչև	մի	ուրիշ	ալիք	է	ելնում, ափը	լիզում	և	կճեպը	բաշին	առած	հետ	տանում	ուրիշ	եզը	շպրտելու, իսկ	ծովը	մնում	է	հանդարտ, անտարբեր:

Արևն	էլ	հանդարտ	մնաց	իր	հրե	քայլքի	մեջ, երբ	գնացքն	ուրիշ	աշխարհից	հուլիսյան	մի	շոգ	օր	ցամաք	նետեց	Հովնաթան	Մարչին: Սակայն	կառապանները	նորեկի	հանդեպ	չունեցան	նույն անտարբերությունը: Նրանցից	մի	քանիսն	աղմուկով	իրար	անցան, և	մինչդեռ	Հովնաթան	Մարչը	լսում	էր	նրանց	մայրենի	բարբառը	և	զմայլվում, ամենից	հանդուգնը	նախ	նրա	իրերը	դարսեց կառքում, ապա	Հովնաթան	Մարչին	էլ	նստեցրեց	և	մտրակեց	ձիերին:

Ճանապարհին, փոշու	ամպի	մեջ, մեկը	հիացմունքով	էր	նայում	շրջապատին	և	ծաղկանկար	թաշկինակով	բերանը	ծածկած, շնչում	հայրենի	երկրի	բույրը, որ	տվյալ	դեպքում	կառապանի	քրտնած մեջքից	էր	ելնում, ճամփի	ճահճուտից, աղբակույտից, իսկ	մյուսն	իր	մտքում	հաշվում	էր` կրկնակի	ուզի՞, թե՞	եռակի, Ամերիկայից	եկած	հարուստ	պասաժիրից:

Թե	ինչո՜վ	վերջացավ	կառապանի	հաշիվը, դժվար	է	ստույգ-ինչ	գրել: Հյուրանոցի	դռանը	Հովնաթան	Մարչն	իջավ	և	երբ	պայուսակները	գետնին	դարսեց, կառապանի	բռան	մեջ	նա	այնպիսի	մի թղթադրամ	դրեց, որ	նա	ձիերին	մտրակեց, բռան	մեջ	սեղմեց	դրամը	և	հրապարակն	արագ	անցնելով	կորավ	կողքի	փողոցներում, առանց	հետ	նայելու: Քիչ	էր	մնացել, որ	մայթից-մայթ	անցնող	մի բարեպաշտ	ծերունի	ընկնի	կառքի	տակ:

Հյուրանոցի	սենյակում	Հովնաթան	Մարչը	ճակատի	քրտինքը	սրբելուց	հետո, գերադաս	համարեց	միառժամանակ	մեկնվել	բազմոցի	վրա: Այդ	դիրքում	շատ	մտքեր	խռնվեցին	նրա	գլխում, շատ հույզեր, և	այդ	ամենն	այն	երկրի	շուրջը, որի	ջուրը	գրաֆինի	մեջ	էր, սեղանի	վրա, Հովնաթան	Մարչին	մի	քայլ	միայն	հեռու, որի	արևը	խաղում	էր	նրա	պայուսակների	հետ:

Սկիզբն	այնքան	էլ	պարզ	չէ, բայց	հայտնի	է, որ	տարիներ	շարունակ	ատենաբանություն	անելուց, ընկերություններ	և	մարմիններ	կազմելուց	ու	վերակազմելուց	հետո, որոնց	բոլորի	առանցքը	եղել է	հեռուներում	ընկած	դրախտավայր	մի	աշխարհ, նրա	կարոտը	երգելուց, նրա	մասին	ճառելուց	ու	նրա	անունով	հանգանակություններ	անելուց	վերջ, մի	օր	Հովնաթան	Մարչը	գնում	է	մեծատուն Անդրեաս	Բալիքյանի	մոտ:

Այդ	լինում	է	օրվա	այն	պահը, երբ	Բալիքյանի	հազար	ու	մի	կերակուրներով	լեցված	ստամոքսը	գերիշխող	է	լինում	նրա	դատողության	վրա	և, սիգարի	կապույտ	ծուխի	օղակներին	ի	տես, ամենից շատ	փափկած	է	լինում	նրա	սիրտը, — դուռը	բացվում	է, դռան	շեմքին	երևում	է	Հովնաթան	Մարչը: Անդրեաս	Բալիքյանը	բավարար	է	համարում	մի	քանի	կոճակներ	կոճկել, դեպի	վեր	տնկած ոտքերին	հորիզոնական	դիրք	տալ	և	ադամանդյա	մատանիներով	զարդարած	փափուկ	ձեռքը	մեկնել	Հովնաթան	Մարչին:

Դուք	կարծում	եք` թե	նա	միայն	սեղմում	է	Բալիքյանի	մեկնած	ձեռքը	և	նստում	աթոռի՞ն: Ո՜չ, այդ	օրն	արտասովոր	մի	մի	դեպք	է	կատարվում, հենց	ձեռքը	սեղմած	ժամանակ: Հովնաթան	Մարչը Բալիքյանի	առողջության	մասին	հարցնելուց	հետո	սկսում	է	խոսել	հին	հայրենիքից, բարեգործությունից	և	վերջացնում	է	հետևյալ	խոսքերով.

— Ո՛վ	մեծատուն, եթե	կուզես	անունդ	հավերժացնել, որ	դարեդար	հիշվիս, աճապարե՜, քանի	դեռ	ողջ	ես:

Այդ	բառերը	զարմանալի	հեշտությամբ	ազդում	են	Անդրեաս	Բալիքյանի	սրտին, և	այն	վայրկյանին, երբ	նա	ուզում	է	բերանը	բաց	անել	երկու	խոսք	ասելու, Մարչն	ավելացնում	է.

— Մեր	հին	հայրենիքին	մեջ	ավան	մը	շինե	ու	թող	ապրին	փղշտացիք	ու	եթովպացիք…

Բալիքյանի	ժպիտը	բարեհաջող	հանգամանք	համարելով, Հովնաթան	Մարչն	աթոռն	ավելի	է	մոտեցրել	նրան, սկսել	է	պատմել	այդ	տիպի	բարեգործության	առավել	կողմերի	մասին: Ծոցից հանելով	քառածալ	թղթի	մի	կտոր, Մարչն	սկսել	է	կարդալ, թե	այդ	նոր	ավանը	կամ	քաղաքը, այդ	ապագա	Նոր	Եթովպիան	քանի՜	տուն	պիտի	ունենա, ամեն	մի	տուն	պետքարան	մը	վեց	մետր խորությամբ, եկեղեցի	մը, ուր	պիտի	հավաքվեն	բնակիչները	կիրակի	օրերը	իրենց	ընտանիքներով, լսելու	հոգևոր	հորդորներ	և	այլն:

Հովնաթան	Մարչը	հայտնել	է, որ	Փղշտացոց	Բարեսիրաց	Մարմնի	որոշումն	է	այդ, և	որ	իրեն	է	հանձնարարված	դիմելու	մեծանուն	հայրենակցի	հայրենաբաղձ	սրտին:

Եվ	սիգարի	ծուխի	մեջ, երբ	Բալիքյանի	աչքին	երազի	պես	երևացել	է	մանկությունը, հոր	տան	կտուրին` աղավնատուն, ցորենի	կարմիր	արտերը	և	նման	բարեմասնություններ, որոնք	երանության ժպիտ	են	հարուցել	նրա	չաղ	և	մաքուր	սափրած	երեսին, ժպիտն	արտացոլել	փափուկ	մատներին	հագցրած	մատանիների	ադամանդների	մեջ, Հովնաթան	Մարչը	աթոռը	համարյա	Բալիքյանի բազմոցին	միացնելով, շարունակել	է	այնպիսի	մանրամասնություններ	ասել, ինչպես	օրինակ` վարժապետին	ընտրությունը:

Այս	և	այս	կարգի	խոսակցությունից	հետո	ի՞նչ	է	իջնում	Բալիքյանի	սրտին, ամենևին	հայտնի	չէ, որովհետև	այդ	սիրտը	կակղում	է, որպես	արևի	տակ	ընկած	մեղրամոմ, նա	իր	համաձայնությունն է	տալիս	և	առաջարկում	Հովնաթան	Մարչին	ճանապարհվել	հին	հայրենիքը, այնտեղ	որոշել	Նոր	Եթովպիա	տեղը, այդ	երկրում	եղած	փղշտացիներին	ու	եթովպիացիներին	հավաքելու, նոր քաղաքում	տեղավորելու:

Այստեղ	հարկավոր	է	հիշատակել	մի	չնչին	դեպք: Նոր	Եթովպիո	մասին	խոսելիս` Հովնաթան	Մարչը	հայտնում	է, որ	Փ.Բ.Մ. (Փղշտացոց	Բարեսիրաց	Մարմին) նիստում	առաջարկ	անողը	եղել	է այրիացյալ	տիկին	Մարինե	Քրաջյանը: Այս	հանգամանքը	կարևոր	է	հիշատակել, քանի	որ	մինչ	այդ	Բալիքյանը	բազմոցի	վրա	պառկած	էր	լսում	Մարչին, իսկ	այս	խոսքերից	հետո	վեր	է	կենում, սենյակի	գորգապատ	հատակի	վրա	քայլում	և	մի	քիչ	խորհում: Հենց	այդ	րոպեին	ներս	է	մտնում	Անդրեաս	Բալիքյանի	կինը, և	Մարչը	նկատում	է, թե	ինչպես	գորգավաճառ	բարերերի	թավ հոնքերը	կախվում	են: Մի	պահ	լռություն	է	տիրում, և	կինը	ստիպված	է	լինում	հեռանալ, որից	հետո	Անդրեաս	Բալիքյանը	նորից	է	պառկում	և	հրահանգներ	տալիս	Հովնաթան	Մարչին, թե ինչպե՜ս	պիտի	մեկնել, ու՜մ	պիտի	տեսնել	այնտեղ, ինչպիսի՜	վայր	պիտի	ընտրել:

— Տեղը	հովոտ	չպիտի	ըլլա... Խոտը	շատ	ըլլալու	է, որ	հայրենակիցները	կրնան	մաքիներ	ալ	պահել: Կը	կարծեմ, թե	աղվոր	գորգեր	կը	գործվի	հոն, եթե	բուրդը	աղեկ	ըլլա...

Բավական	երկար	ժամանակ	զրուցելուց	հետո	Հովնաթան	Մարչը	սեղմում	է	նրա	ձեռքը	և	սենյակից	դուրս	թռչում, վազում	իր	բնակարանը, ուր	սպասում	էին	Մարինե	Քրաջյանը, Բարունակ Ճիթեչյանը	և	մյուսները: Եվ	այդ	նույն	գիշեր, ընկերական	փառավոր	հավաքույթին, Հովնաթան	Մարչը	դառնում	է	հերոս...

Ահա՜, ընթերցող, Անդրեաս	Բալաքյանի	այդ	համաձայնությունից	է	սկսվում	այն	երկար	ճանապարհորդությունը, որի	վախճանը	եղավ	հուլիսյան	մի	շոգ	օր:

Երբ	նույն	օրը	Հովնաթան	Մարչը	պառկել	էր	բաղնիսի	քարին, և	քիսաչի	Հովակի	բոբիկ	ոտքերը	սահում	էին	նրա	մեջքի	վրայով, քիսաչու	գլխում	խորհրդածություններ	էին	ծնում	այն	մասին, թե ի՛նչ	լավ	պահած	մարմին	ունի	մուշտարին, — Հովնաթան	Մարչը	քթի	տակ	մռմռում	էր	հայրենաբաղձ	երգերից	և	գլխին	բամբակի	քուլաների	պես	թափվող	սապոնի	պղպջակների	միջից	նայում Հովակին, նրա	շիլ	աչքին, կախ	ընկած, բարակ	պոչով	բեխերին:

— Փղշտացի՞	է, — մտածում	էր	Մարչը	նրա	մասին: Ինչքա՛ն	կուրախանա, եթե	հենց	այդտեղ, հայտնի	իր	միտքը, Հովակին	տեղավորել	կառուցվելիք	Նոր	Եթովպիայում:

— Ուսկի՞ց	ես	բարեկամ, — հարցրեց	Մարչը, երբ	Հովակը	նրա	մազերի	մեջն	էր	խրել	իր	մատները	և	լվանում	էր	փղշտական	գլուխը:

— Հող	ունի՞ս, տուն-տեղ...

— Հողն	ի՞նչ	պիտի	անեմ... Էսպես	յոլա	ենք	գնում: Ունեմ, հա, հող	ունեմ: Քարոտ	տեղ	է	մեր	տեղը: Էստեղ	լավ	է, օրական	հացի	փող	ենք	աշխատում...

Այս	վերջին	միտքը	Հովակը	որոշ	նկատառումով	ասաց, նորեկ	մուշտարու	առատաձեռնության	դռները	բանալու	հուսով: Եվ	երբ	դույլով	լի	սառը	ջուր	թափեց	նրա	գլխին, Հովակը	չնկատեց, որ	իր բառերն	արդեն	պաղություն	էին	թափել	Մարչի	տաք	հայրենասիրության	վրա:

Ինչպե՞ս: Մարդ	հող	չունենա՞, չկամենա	կապվել	հայրենիքի	հետ, իր	քրտինքը	չթափի՞	պապերի	կոխած	տեղում, չքերի՞	այս	չքնաղ	երկրի	կուրծքը	և	նրա	օդում	չհնչեցնի՞	գյուղական	հորովել: Ուրեմն	փղշտացի	չէ	քիսաչի	Հովակը, և	լավ	է, որ	ինքը	նրան	չհայտնեց	Նոր	Եթովպիա	մասին:

Երբ	հյուրանոցի	մահճակալի	վրա	պառկած, Հովնաթան	Մարչը	լիաթոք	շնչում	էր	բաց	պատուհանից	ներս	մտնող	իրիկվա	հովը	և	հովի	հետ	էլ	փողոցից	եկող	ձայները	լսում, — նա	ապրում	էր հոգու	խաղաղ	մի	վիճակ, որպիսին	մարդ	ունենում	է, երբ	մեջքի	վրա	պառկած, կտրան	վրա, երկնքի	աստղերն	է	դիտում:

Ինչքան	հեռու՛	էր	այն	երկիրը, որտեղից	նա	ճանապարհվեց: Մարչը	մտքով	մի	անգամ	էլ	եկած	ճանապարհը	կտրեց	և	այդ	անելուց	հետո	ինքն	իր	աչքում	բարձրացավ, դարձավ	հերոս: Վերադարձին	ինչե՛ր	պիտի	պատմի	և	ինչ	ճառեր	ասի, ճառե՜ր, որ	արցունքներ	հոսեցնելուց	բացի, դոլլարներ	պիտի	հավաքեն	և	ճամփու	դնեն	այս	երկիրը` շենացնելու, ցեղին	համար	օրրան	մը կերտելու…

Մի	անգամ	էլ	վերհիշեց	Բալիքյանին, սիգարի	կապույտ	ծուխի	մեջ, իր	ճառը, ճանապարհվելու	վերջին	օրերը, ընկերական	հավաքույթը, որի	հերոսն	էր, անհայտ	մի	երկիր	ուսումնասիրելու	գնացող խիզախ	հետախույս: Ապա	երգեր, պար, տիկիններ, որոնցից	ամեն	մեկն	այդ	գիշեր	աշխատում	էր	ավելի	շատ	խոսել	Մարչի	հետ, ժպիտներ	տալ, ասես	ժպիտները	ճամփի	պաշարի	գաթաներ	էին:

Ամենից	շատ	սիրալիր	էր	տիկին	Մարինեն:

Այստեղ	արդեն, ընթերցո՜ղ, Մարչը	վերհիշեց	այնպիսի	դեպքեր, որ	կապ	չունենալով	նրա	առաքելության	հետ, կազմում	են	հոգու	այն	թանկագին	անկյունը, որի	ամեն	մի	իրի	ինչ	լինելը	միայն տիրոջն	է	հայտնի: Այդ	վերհիշումի	հետևանքն	եղավ	այն, որ	Հովնաթան	Մարչը	մի	կողքին	դարձավ, ձեռքերը	ծալեց	այնպես, ասես	ձեռքով	գրկել	էր	մի	գլուխ: Բայց	ես	խոստացա	չպատմել	այդ մասին, քանի	որ	այդ	գլուխն	ամենից	թանկ	իրն	էր	նրա	հոգու	անկյունում:

Երեկոյան	նրա	մոտ	եկավ	կարճլիկ	մի	մարդ, որին	փողոցում	տեսնելիս	շատերը	կարծում	էին, թե	քաղաքի	ամենից	զբաղված	մարդն	է, որի	վրա	է	ծանրացած	անթիվ	հոգս` հիվանդներ	բժշկել, երկաթուղիներ	անցկացնել, ձիաբուծարան	հիմնել	և	այլն, և	այլն:

— Բժիշկ	Երանոս:

— Շատ	ուրախ	եմ…

Եվ	բժիշկը	հևիհև	սկսեց	պատմել	մի	ուրիշ	տեղ	շտապող	մարդու	պես	արագ-արագ	խոսելով, որ	ինքը	վաղուց	է	լսել	նրա	գալուստի	մասին, անհանգստանում	էր, թե	չլինի՞	ճանապարհին	մի	բան	է պատահել:

— Լա՞վ	եկաք, չնեղացրի՞ն …

— Օ, ո՛չ, փառավոր: Ես	հիացած	եմ…

— Գիտե՞ք, այստեղ	շատ	բան	կտեսնեք…

— Անշու՜շտ, հարկավ:

Մի	քիչ	հետո	Մարչը	բժիշկ	Երանոսին	պատմում	էր	Նոր	Եթովպիո	մասին, թե	ի՛նչ	սքանչելի	քաղաք	պիտի	լինի, ովքեր	պիտի	ապրեն	և	թե	մեծաքանակ	գումար	է	հատկացավծ	այդ	գործի	համար: Բժիշկ	Երանոսը	զմայլանքով	էր	լսում: Ահա	մեծ	սենսացիա: Իսկույն	հարկավոր	է	դուրս	թռնել, ասել	սրան-նրան, լուրը	տարածել: Եվ	բժիշկը	թոթվեց	Մարչի	ձեռքը, խոստացավ	հաճախ	տեսնվել, ուրիշներին	էլ	բերել:

— Շատ	պատվական	և	ազնիվ	մարդիկ	կան, — ասաց	բժիշկը	և	դուրս	գնաց, — ո՜չ, գլորվեց	որպես	ֆուտբոլի	գնդակ, որ	հարվածից	դիպչում	է	մերթ	այս	քարին, մերթ	այն	պատին, նորից	հետ դառնում	ու	նորից	դիպչում:

Իսկ	Հովնաթան	Մարչը	գոհ	առաջին	ծանոթությունից	մեկնվեց	մահճակալի	վրա, առաջին	հանդիպումը	խմբագրելով	այսպես.

— Հոս	ալ	պատվական	ազգայիններ	կան…

Այդ	գիշեր	մի	սոսկալի	արշավանք	սկսվեց	Հովնաթան	Մարչի	դեմ: Ճամփից	հոգնել	էր, քիսաչի	Հովակի	բոբիկ	ոտքերն	էլ	մաժել	էին	նրա	երակները: Եվ	քունը	չուշացավ	ոչ	միայն	նրա	կոպերն իջեցնելու, այլև	մարմնի	մասերը	այս	ու	այն	կողմ	ազատ	ու	հանգիստ	փռելու:

Հուլիսյան	յադ	կեսգիշերին, երբ	թվում	էր, թե	բացել	են	անթիվ	անհամար	կրի	և	գաջի	գործարանների	դռներ	ու	թեժ	վառարաններից	տաք	օդ	են	մղում	քաղաքի	փողոցները, երբ	միլիցիոները մինչև	ծնկերը	վեր	քաշած	ոտներն	առվի	ջրի	մեջ	էր	կոխել	և	ննջում	էր, հրացանի	կոթից	բռնած, երբ	շոգից	անքուն, ինչ-որ	մարդիկ	լուսնոտների	պես	թափառում	էին	փողոցներում	և	մի	զով	տեղ փնտրում	նստելու	և	նստած	ննջելու, երբ	բաց	պատուհանի	առաջ	քնած	ամուսնական	զույգը	թարմ	օդ	շնչելու	համար	գլուխն	էր	կախել	մայթի	վրա, խռռացնում	էր	և	շնչում, — տոթ	այդ	գիշերին Հովնաթան	Մարչը	կոշիկի	երկաթ	կրունկով, հին	հայրենիքում, հյուրանոցի	պաստառների	վրա	ջարդում	էր	մլակներին, որոնց	անթիվ	շարքերը, քաղցած	ոհմակի	պես, մութից	օգտվելով	գրոհ	էին տվել	մահճակալի	վրա	մուշ-մուշ	քնած	մաքուր	մարմնի	բարակ	մաշկը	ծակելու	և	ծծելու	Հովնաթան	Մարչի	փղշտական	արյունը:

Ամեն	անգամ, երբ	երկաթ	կրունկի	տակ	ճլփոցով	դիտապաստ	էր	լինում	մլակը, գարշահոտ	տարածում, Հովնաթան	Մարչը	ժպտում	էր, բարիք	կատարող	մարդու	պես:

— Ահա, կերար, — ու	մի	հարված	էլ:

— Այսպես	էլ	հոթե՛լ: — Ու	մի	զարկ	էլ, և	գարշահոտ, արյունոտ	պաստառ:

Մերթընդմերթ	ոտքերն	էր	բարձրացնում, ձեռքով	խփում	մարմնի	զանազան	մասերին, որովհետև	այն	ժամանակ, երբ	Մարչն	աչքերը	ման	էր	ածում	պաստառի	վրա	կամ	վերմակն	էր	աջ	ու	ձախ դարձնում	և	հարվածում, մի	ուրիշը	ոտքն	ի	վեր	բարձրանում	էր	և	ուզած	տեղը	ծակում, ծծում, մինչև	նրա	ձեռքը	հասներ:

Այդ	աշխատանքը	սկզբում	դուրեկան	թվաց: Ահա	որսորդը, որ	եղեգնուտում	կրակում	է	անընդհատ, և	ամեն	մի	կրակոցից	վայրի	մի	խոզ	թավալգլոր	է	լինում: Հետո	քունը	հաղթեց, գլուխը ծանրացավ... Իսկ	մլակները	հա	գալիս	էին: Եվ	այդ	պահին	նրա	բեզարած	գլխում	ծնվեցին	մտքեր, որ	դառնահամ	էին, մասամբ	հուսահատ, մասամբ	զղջումի	շեշտով:

— Ինչու՞	եկար	այս	երկիրը... Կար	փափուկ	անկողին, մաքուր	սենյակ	և	ուրիշ	պարագաներ: Կար	և	գլխի	մեջ	մի	կակուղ	զանգված, սրտի	մեջ	կարոտ	դեպի	հեռու	երկիրը: Եվ	այդ	ամենը	որպես կապույտ	մշուշ, անհաս, ինչպես	ամպն	Արարատի	գլխին, որպես	առասպել, Նոյյան	տապանի	պատմություն: Իսկ	այժմ... Կեղտոտ	պաստառներ, մլակներ, տոթ, անքուն	գիշեր...

Հովնաթան	Մարչի	անչքն	ընկավ	պատից	կախած	հյուրանոցի	կանոններին: Մայրենի	լեզվով	էր	գրած, Մեսրոպ	Մաշտոցի	հնարած	տառերով: Այդ	կանոններին	ի	տես	նրա	սիրտը	թունդ	առավ, և երբ	ձեռքը	մոտեցրեց, տախտակը	բարձրացրեց, մլակների	մի	հոծ	բազմություն, խրտնած	ոչխարի	հոտի	պես, շաղ	եկավ:

— Ինչու՞	եկար	այս	երկիրը...

Նրա	սրտին	հովություն	չտվավ	և	գրաֆինի	պաղ	ջուրը, հայրենիքի	ջուրը, որի	մասին	հավաքույթի	այն	գիշերը	ոսկեգույն	խոպոպներով	տիկինը	այնքան	չքնաղ	ժպիտով, բարակ	շրթունքներն իրարից	բաժանելով, ասել	էր.

— Պարո՜ն	Մարչ, ինծի	կը	հիշեք, երբ	առաջին	անգամ	հայրենիքի	ջուրը	խմեք...

Եթե	մինչև	արևի	բարձրանալը	լուսաբացի	զովությունը	չլիներ, Հովնաթան	Մարչի	դեմքին	մյուս	օրը	նայողը	պիտի	կարծեր, թե	նա	ուրիշ	ծանր	հոգսերի	հետ	ունի	և	ստամոքսի	խանգարում, կերածը	չի	մարսում:

2

Տղա՜, ինչու՞	կարգապահ	եղար	և	Հովնաթան	Մարչին	իսկույն	ներս	չթողիր, երբ	նա	դանդաղ	քայլերով	և	ամենայն	վեհությամբ	մոտեցավ	այն	դռան, որի	վրա	գրված	էր	Պետի	առանձնասենյակ, և որի	կողքին	կանգնել	էիր, ձեռքդ	դռան	պղնձե	կոթից	բռնած: Եվ	թութակի	նման	կրկնեցիր.

— Առանց	զեկուցման	չի	կարելի, ընկե՜ր:

Հովնաթան	Մարչը	ցնցվեց, մի	քիչ	հետ	քաշվեց	և	երբ	այցետոմսը	մեկնեց, դու	գիրկապ	անելով	կարդացիր.

— Փղշտացոց	Բարեսիրաց	Մարմնի	լիազոր, — նորից	ուսերդ	թոթվեցիր, կրկնելով	նույն	անիմաստ	բառերը	հերթի	մասին:

Նախասենյակում	խռնվել	էին	գյուղացիք: Ոմանք	չոքել	էին	գետնին, զրուցում	էին	իրար	հետ, ոմանք	էլ	մուտքից	քիչ	հեռու	կանգնած	հերթի	էին	սպասում: Հայ, թուրք, եզդի	ու	բոլոր բարբառները, բոլոր	գավառների	բույրը, տեսակ-տեսակ	շորեր	և	շորերից	տարբեր	հոտ` գոմի, հողի, աղբի, քրտինքի: Հարկավո՞ր	էր, որ	Հովնաթան	Մարչը	նախասենյակում	շնչի	այդ	ծանր	հոտը և	հաճախ	մետաքսե	թաշկինակով	սրբի	ճակատի	քրտինքը, որի	ամեն	մի	կաթիլը	գլորվում	էր	փղշտական	մի	քաղաք	հիմնելու	ցամաք	ու	աղքատ	Արմենիայում:

Երբ	Հովնաթան	Մարչը	պատուհանի	առաջ	կանգնած	փողոցի	անցուդարձին	էր	նայում	և	պատին	սեղմվում, հենց	որ	նախասենյակում	սպասողներից	մեկնումեկը	անցնում	էր	կողքով	ու	քիչ	էր մնում	ոտքը	կոխեր, — նրա	դեմքին	երևում	էր	այնպիսի	մի	արտահայտություն , որի	մասին	դեռ	դարեր	առաջ	այսպես	էր	գրած	Հովհաննու	ավետարանում.

— Յուրսն	եկն	և	յուրքն	զնա	ոչ	ընկալան...

— Խնդրե՜մ, ընկեր, — ասաց	տղան	և	դուռը	լայն	բաց	արեց:

Հովնաթան	Մարչը	կայծակի	արագությամբ	մտքերը	ժողովեց, դասավորեց	որպես	խաղաթուղթ	և	դռնից	ներս	մտնելիս	պատրաստվեց	կրկնելու	այն, ինչ	եղավ	Անդրեաս	Բալիքյանի	սենյակում, երբ	պետը	հեռախոսի	խողովակն	ականջին	մոտեցնելով, աջ	ձեռքով	Հովնաթան	Մարչին	առաջարկեց	նստել	ազատ	աթոռին:

Մոտ	հինգ	րոպե, մի	ուրիշը, որ	չէր	սպասել	նախասենյակում, հեռախոսով	այնպիսի	մի	նյութի	մասին	խոսեց, որ	պետական	խոշոր	գաղտնիք	թվաց	Հովնաթան	Մարչին: Որովհետև	երեխան	էլ կհասկանա, թե	ի՜նչ	է	նշանակում.

— Ասում	ես	սահմանի	մո՞տ	են..

— Այո՜, միջոցներ	ունենք: Կարող	ենք	մի	խումբ	ուղարկել...

— Եղեգնուտները	կխանգարեն: Թող	վառեն: Բոլոր	միջոցները	կտանք:

— Այո՜, այո՜:

— Ութ	հազարի	չափ: Իհարկե, վտանգը	մեծ	է: Գյուղերից	սայլեր	կհավքենք: Եթե	կարիք	լինի, կարող	ենք	բնակիչներին	դուրս	հանել…

— Լա՜վ, լավ: Հենց	այս	գիշեր	մերոնք	դուրս	կգան…

Դուք	կարծում	եք, թե	այս	ամբողջ	խոսակցության	ժամանակ	Հովնաթան	Մարչը	եգիպտական	մումիայի	քարացած	դե՞մք	ուներ	և	չէ՞ր	հուզվում, աթոռի	վրա	տեղը	չէ՞ր	շտկում, թուքը սովորականի	պե՞ս	էր	կուլ	տալիս:

Քա՜վ	և	մի՜	լիցի: Այն	ժամանակ, երբ	հեռախոսի	խողովակը	լսեց	սահմանի	մոտ	են	բառերը, Հովնաթան	Մարչը	մեջքը	ձգեց	ճիշտ	այնպես, ինչպես	զինվորներն	են	անում, երբ	զենք	ու	զրահի	մեջ կորած, մարզադաշտում	անցնում	են	հրամանատարի	կողքով: Ինչպես	ասում	են, Հովնաթան	Մարչի	լեղին	ճաքեց, երբ	ամենայն	անտարբերությամբ	պետը	մի	ուրիշ	աներևույթ	մարդու հայտարարեց, որ	մերոնք	գիշերս	դուրս	կգան…

Զորաժողո՞վ, սայլերի	բռնագրավու՞մ, ի	զե՜ն, ի	սու՜ր, հայրենիքը	վտանգվա՞ծ	է…	Եվ	այդ` հուլիսյան	շոգ	օրի՜ն, երբ	օդում	ամեն	ինչի	հոտ	կար, բացի	վառոդի: Այո՜, այո՜, անպարտելի	են Արմենիո	տերերը, եթե	նրանք	պատերազմի	հրամանն	արձակում	են	այդքան	անտարբեր, նույնիսկ	քնատ	աչքերով:

Այս	ամենը	կատարվեց	հինգ	րոպեում: Վեցերորդ	րոպեին	պետը	աչքերը	դարձրեց	Հովնաթան	Մարչի	հարթուկած	զգեստին, մաքուր	ածիլած	երեսին	և	այդ	երեսի	քնքուշ, բարակ	մորթուն:

— Ինչու՞մն	է	բանը, — հարցրեց	նա, և	այդ	պետը	աչքերն	էր	տրորում, Հովնաթան	Մարչը	մի	քիչ	մոտեցավ	նրա	սեղանին	ու	շարեց	բավական	սահուն	մտքեր:

— Հեռուներեն	եկած	եմ: Կփափագիմ	քաղաք	մը	հիմնել, աշխարհիս	մեջ	ցանուցիր	եղած	փղշտացիներով	բնակեցնելու: Հոս	տեղ	ալ	կը	փնտրեմ	փղշտացիներ, եթովպացիներ: Անոնք հայրենակիցներ	են…

— Լա՜վ, բարի…

— Հարկավ, առանց	Ձերին	բարյացակամության	այս	գործը	գլուխ	չի	գար: Հուսով	եմ, որ	Դուք	ալ	տոգորված	սիրով	դեպի	այս	երկիրը, մեզի	հողամաս	մը	կը	տրամադրեքՆոր	Եթովպիո…

— Լա՜վ, լավ... – Եվ	այդ	լավերը	զուգորդում	էին	կակուղ	հորանջոցներին:

— Այո՜, այսպես: Մեր	ուզած	տեղը	երկրի	սրտին	մեջն	ըլլալու	է: Նախընտրելի	է	ազգային	վայր	մը, պատմական	և	այլն: Մեր	հայրենակիցները	գորգագործությամբ	պիտի	պարապին: Գիտեք, որ աշխարհիս	մեջ	մերայինք	մեկ	հատիկ	են, մրցակից	չունին: Հռչակավոր	հնդահաններ	են, աֆիոն, ծխախոտ	և	նման	անվանի	գործեր	ունին	ամենքն	ալ, դրամ	շահելու	կողմանե: Ինքը	Բալիքյանն	ալ այդպես	պզտիկ	գործ	մը	նախընտրեց, ետքը	դարձավ	մեծանուն	ազգասեր: Հիմա	անոր	կողմեն	է, որ	կը	բանակցիմ, նաև	Փղշտացոց	Բա...

— Լա՛վ: Քանի	դեսյատին	հող	է	պետք, ջրովի՞, թե` անջրդի:

— Մեզի	առաջին	հեղ	սանկ	հինգ	հարյուր	հեկտար	կը	բավե: Վերջը, երբ	մեծնանք, ամեն	կողմերե	հոս	հավաքվին	փղշտացիք, եթովպացիք, հոս	ծաղկյալ	դրախտ	մը	պիտի	շինվի: Ամենքն	ալ	այդ փափագով	կը	տառապին, հայրենիքի	հողին	վրա	մեռ...

— Դուք	հիմա՞	եք	հող	ուզում, — ասաց	պետը	պահարանից	քարտեզը	հանելով: Տղան	դուռը	կիսաբաց	էր	անում, աչքի	տակով	նայում: Այդ	ընդունված	պայմանական	նշանն	էր	այն	մասին, թե նախասենյակը	հուզվում	է:

— Ահա	ձեզ	ազատ	հող: Արաքս	կայարանի	մոտ: Ղամշլուի	շրջան	և	Արազդայան: Այս	երեք	տեղից	բացի	ազատ	հող	չունենք:

Հովնաթան	Մարչը	նայեց	քարտեզին: Սա	է	Արմենիան, տեղ-տեղ	կանաչ	օազիսներ, այգեշատ	ավաններ, ապա	ցամաք	տափարակ, դեմի	ապառաժներ	և	լեռներ` անտառներով	և	առանց	անտառի:

Արաքս…	Դաշնամուրի	մի	ակորդ	կարող	է	ձեզ	հիշեցնել	անցյալի	մի	պատմություն: Դուք	կարող	եք	փափկանալ, ինչպես	կրակին	մոտեցրած	մոմ, գուցե	և	հալվել, այսինքն	արտասվել, և	այդ ամենը	դաշնամուրի	մի	ակորդ	լսելուց	հետո: Արաքս…	Հովնաթան	Մարչ, քայլամոլոր	գնում	եմ	և	ապա	հին	հին	դարեր, ինծի	կհիշեք, պարոն	Հովնաթան, գանգուր	խոպոպներով	բարեգործական մի	տիկին, որի	համար	այս	հեռավոր	երկիրը, Փոքր	Ասիայի	խորքում	ընկած	Արմենիան, դուրեկան	միրաժ	է, մանուկ	օրերի	երազ:

Պետը	քարտեզը	կոլոլեց, և	երբ	Մարչի	աչքերից	ծածկվեց	քաթանի	վրա	գծած	վերջին	հորիզոնական	գիծը, հայրենասիրական	սեանսը	վերջացավ: Մնաց	մինչև	փողոց	հասնելը	մի	քիչ	էլ	ապրելու նկարի	գեղեցկությամբ, որովհետև	փողոցի	ժխորը	պիտի	հօդս	ցնդեցներ	այդ	միրաժը:

— Գեղեցիկ: Ես	կերթամ, կպտտիմ	այդ	կողմերը, — ասաց	Մարչը, ընդունելով	պետի	մեկնած	ձեռքը, — վտանգավոր	չե՞ն, Ձեզմե	մանդատ	առնելու	հարկ	չկա՞,-	հարցրեց	նա: Հասկանալի	է, որ	նա վերհիշեց	մերոնք	այս	գիշեր	դուրս	կգան…

— Ոչ	մի	թուղթ: Նշանակեցե՜ք	անունները, տեղում	ծանոթացեք, մենք	համաձայն	ենք: Կհատկացնենք	հինգ	հարյուր	հեկտար:

Եվ	երբ	Հովնաթան	Մարչը	մոտեցել	էր	այն	շեմքին, որից	նախասենյակ	մտնել	հնարավոր	է	և	առանց	զեկուցման, — հանկարծ	ետ	դարձավ:

— Ինծի	մեծ	պատիվ	ըրած	պիտի	ըլլաք, եթե	հուշատետրիս	մեջ	Ձեր	անունը	ստորագրեք: Հավետ	անմոռաց	հիշատակ	մը	մեր	առաջին	հանդիպումի:

Պետի	ժպիտը	հայերենով	գրելու	համար	հարկավոր	է	գտնել	այնպիսի	մի	բառ, որ	նշանակի	և՜	զարմանք, և՜	ծիծաղ, և՜	արհամահրանք: Բայց	և	այնպես	ստորագրեց: Սանդուղքներից	իջնելիս Հովնաթան	Մարչը	այդ	հուշատետրի	այդ	սպիտակ	թերթը	տանում	էր	որպես	մասունք:

…	Հեռախոսի	զանգը	այնպես	զիլ	քրքջաց, երբ	Մարչը	փակեց	դուռը:

Այդ	օրը	N	27	փոստարկղն	ընդունեց	զարմանալի	մի	նամակ:

«Սիրելի՜	հայրենակիցներ. կպտտին	դժնդակ	լուրեր: Սահմանի	մոտ	ինչ-որ	եռուզեռ	կա: Այս	գիշեր	ութ	հազարնոց	բանակ	մը	պիտի	անցնի	Արաքսը: Չեմ	կրնար	երկար	գրել, ձեռքս	կդողա: Ո՞րն	է այս	երկրին	ներքին	իմաստը, հողին	ույժը: Ով	ալ	տիրելու	ըլլա	չքնաղ	Արմենիո, կռնակը	Արարատին	պիտի	կրթնեցնե: Տեղեկությունները	ստույգ	են, բայց	գաղտնի	կպահվի: Ի՞նչ	պետք	կա ավելորդ	թմբկահարության: Ա՛հ, կսիրեմ, կսիրեմ	այս	վերին	գաղտնիքը: Գործս	հաջող	կերթա: Վաղը	Նոր	Եթովպիո	տեղը	տեսնելու	պիտի	երթամ: Ինծի	կըսեն, թե	այդ	հողին	վրա	արքայական դամբարաններ	կան: Օ՛, ցնծա, երկիր	մայրենի: Փղշտացի	դեռ	չեմ	տեսած, լուր	ունիմ,որ	Ալագյազի	կողմերը	քանի	մը	եթովպացի	կա: Առայժմ	այսչափ: Հոս	տաք	է, սակայն	կառավարության դիրքը	անսասան	կերևա…»

Եթե	ստորագրությունը	ցույց	տային	Բուենոս	Այրեսում	ապրող	խոպոպիկներով	տիկնոջ, անպատճառ	ուրախությունից	ձեռքերն	իրար	պիտի	զարկեր	և	կանչեր.

— Հովնաթա՛ն	Մարչ…

Հենց	այդ	նույն	օրը, երբ	հովը	մի	քիչ	կոտրեց	ցերեկվա	շոգը, ութ	հոգի, նավթի	բիդոններով, եղեգնյա	երկար	ցողերով, դեղորայքի	արկղներով	քաղաքից	մեկնեցին	սահմանամերձ	մի	վայր, որի եղեգնուտների	մեջ	մորեխ	էր	երևացել	և	սպառնում	էր	հարևան	գյուղերի	ութ	հազար	դեսյատին	արտերին	ու	բամբակին…

3

Ավտոմոբիլը	սլանում	էր	առավել	արագությամբ: Շոֆերի	աչքը	սլաքին	էր	և	ժապավենին, որ	դառնում	էր	և	ցույց	տալիս` 75-80-75: Թվում	էր, թե	մեքենան	անիվներ	չունի, սլանում	է	ոչ	թե խճուղով, այլ	եթերում	է	ճախրում: Այո՜, այդպես	թվում	էր, և	տեսնողը	գուցե	կարծեր, թե	ավտոմոբիլն	արագ	քշելով	կարելի	է	դարձնել	տերոպլան	կամ	վերհիշեր	Եղիա	մարգարեի	քառաձի կառքի	առասպելը, եթե	մեքենան	փոշու	ամպ	չբարձրացներ	և	այդ	ամպը	չնստեր	խճուղով	անցուդարձ	անող	սայլերի, սելվորների	և	գոմեշների	վրա:

Զորությունը	մեքենայի	մեջ	չէր, այլ	այն	մարդու	հոգում, որ	կաշվի	բարձի	վրա	նստած, աչքերը	տափարակի	անհունության	մեջ	սուզած, մտքով	հեռուն	էր	թռչում, տասնյակ	դարեր	հետ	և պատմության	փոշեպատ	խորքերից	հանում	դեմքեր, որոնց	ստույգ	լինելու	մասին	միայն	ծերունի	մատենագիրն	է	վկայել:

Մեքենայի	թափը	արագ	բռնկվող	բենզինից	չէր, այլ	Հովնաթան	Մարչի	հրդեհվող	հայրենասիրությունից: Սլանում	էր	մեքենան, քամուց	ֆռֆռում	էր	նրա	լայն	վերնազգեստը: Կարծես	մարդ	չէր նստած, այլ	թևավոր	ոգի, որ	հուլիսյան	շոգին	հայտնվել	էր	անամպ	երկնքի	խորքից, փոշի	բարձրացրել	ու	անհետանալու	էր	փոշու	ամպի	մեջ:

— Ինչ	յաման	կքշա՛	անիրավը…	Տեսնես	ո՞վ	ա…

— Ամերիկացու	կնմաներ:

Այսպես	էին	խոսում	սելվորները, փոշու	ամպի	մեջ	փորձելով	որոշել, թե	ու՞ր	կորավ	մեքենան:

Ուրիշ	էլ	ինչ	կարող	էին	խոսել	մարդիկ, որոնց	ուղեղը	արևի	տակ	կակղել	էր, և	որոնց	լեզուն	ցեխախառն	թուքի	մեջ	դառնում	էր	այնքան	ծուլորեն, որքան	գոմեշը	տիղմի	մեջ: Հարկ	չկա վիրավորելու	Հովնաթան	Մարչի	պայծառ	հիշատակը (ընթերցողը	հետո	կտեսնի, որ	հիրավի, խոսքը	միայն	հիշատակի	մասին	կարող	է	լինել) և	գրել, որ	գյուղացիներից	մեկը, որի	գոմեշները խրտնեցին	և	սայլը	թեքեցին	այնպես, ինչպես	նավն	է	թեքվում	ճեղքվածք	ստանալիս, որ	գյուղացիներից	մեկը	ծա՛նր, շատ	ծանր	հիշոցք	շպրտեց, ուղղված	և՜	Մարչին, և՜	նրա…	Օ՛, ոսկեգանգուր խոպոպիկներով	տիկին, եթե	Բուենոս	Այրեսում	դու	լսեիր…

Հովնաթան	Մարչը	գնում	էր	Նոր	Եթովպիո	տեղը	որոշելու, տեսնելու	այն	տափարակը, քարոտ	և	անջուր	երկիրը, որի	մասին	բանաստեղծները	երգել	են	որպես	չքնաղ	դրախտավայր, և	ուր Փղշտացոց	Բարեսիրաց	Մարմնի	մոգական	ուժով	պիտի	հարություն	առնի	մեծ	մեռած	քաղաք, մի	Նոր	Եթովպիա, ո՜չ, ահագին	մի	աշխարհ:

Արարատյան	դաշտը	ամենևին	չքնաղ	գեղեցկուհի	չէր	հուլիսյան	այդ	շոգ	օրին, թեկուզ	այդպես	էր	երևում	Հովնաթան	Մարչին` ակնոցների	հաստ	ապակու	ետևից: Այդ	մի	պառավ	կին	էր, ստինքները` չորացած	տրեխներ, որի	ճաքճքած	պռոշները	միայն	ջուր	էին	ուզում, խոստանալով	այդ	դեպքում	միայն	երևան	հանել	իր	խորքում	թաղված	ուժը:

Հովնաթան	Մարչը	ուշք	չէր	դարձում	մեքենայի	ցնցումներին: Նա	չէր	ջոկում	բամբակի	դաշտերը	ցորենի	դեղնած	արտերից, մեքենան	գյուղերի	միջով	սլանալիս` նրան	այնպես	էր	թվում, թե հասարակ	հողաբլուրներ	են	և	ոչ	բնակավայր, հնուց	մնացած	թմբեր, որոնց	տակ, հասկանու՞մ	եք, թաղված	է	այս	երկրի	արքայական	անցյալը, երբ	իշխանները	Արարատյան	շամբուտներում	որսի էին	դուրս	գալիս, վարազներին	նիզակահար	անում	և	Արաքսի	կղզիների	վրա	սարքում	խրախճանք:

Քշի՜ր, շոֆեր, քշի՜ր…	Ինչքան	էլ	արագ	սլանաս, պասաժիրիդ	մտքի	թափին	չպիտի	հասնես, թեկուզ	գյուղերն	էլ	տրորես	անիվների	տակ: Քշի՜ր, և	թող	իրականը	Հովնաթան	Մարչի	աչքին	մի	պահ չերևա, թող	Արմենիան	դառնա	ամպերից	կախ	ընկած	դրախտ, որի	բնիկները	զտարյուն	են, Թորգոմյան	ցեղի	անաղարտ	հոգով, կատարյալ	և	իսկատիպ	փղշտացի, եթովպացի	և	ոչ	մոլլա-բայազետցի	միջակ	կամ	աղքատ:

Հեղափոխությու՞ն, սոցիալի՞զմ... Քշի՜ր, շոֆեր: Հովնաթան	Մարչը	այդ	համարում	է	անցողիկ	երևույթ, նու՜, որպես	պատմության	մի	գրիպ, մարմնի	ժամանակավոր	խանգարում, որից	հետո մոխիրների	տակից	պիտի	հարություն	առնեն	բոլոր	մեռած	քաղաքները, քանի	երկրագնդի	անկյուններում	Հովնաթան	Մարչի	պես	մարդիկ	Արմենիա	ասելիս	աչքերից	արցունքներ	են	գլորում	և գրկում	այդ	գաղափարը, որպես	թունդ	հարբեցողը	վերջին	շիշ	օղին:

Մեքենան	կանգնեց: Շոֆերը	քրտինքը	սրբելով	հետ	նայեց	ու	մի	պահ	զարմացավ: Հովնաթան	Մարչը	քնել	էր	փափուկ	բարձերի	վրա	և	բնազդաբար	շարունակում	էր	օրորալ, որպես	օվկիանոսի շոգենավ` մարմանդ	կոհակների	վրա: Միայն	մարմինը	չէր	օրորվում, մտքերը	ճոճանակի	պես	տարուբեր	էին	լինում, թեկուզ	միտքն	էլ	աշխատում	էր	որպես	խանգարված	ժամացույց:

Շչակը	ոռնաց: Հովնաթան	Մարչը	ցնցվեց, աչքերը	տրորեց: Ա՛խ, եթե	շամբուտներ	լինեին, և	իշխանական	վարազը	մռնչար	շչակի	պես: Շուրջն	ամայի	տափարակ	էր, տեղ-տեղ	քարակույտեր:

Ահա	ինքը` փղշտացոց	լիազորը	ոտք	է	կոխում	ապագա	քաղաքի	սահմանը	և	քայլում	է	որպես	հաղթանակից	վերադարձող	զորավար: Ու՞ր	են	կամարները, ինչու՞	շեփորները	չեն	ավետում	քնած քաղաքին	այն	մասին, թե…

Շոֆերը	մեքենայի	գլուխը	հետ	դարձրեց, և	որովհետև	Հովնաթան	Մարչի	պատվերը	կար	մի	հով	տեղ	սպասելու, քշեց	դեպի	դեմը	երևացող	ծառաստանը: Հովնաթան	Մարչը	նայեց	հեռացող մեքենային, ապա	երեսը	դարձրեց	տափարակի	կողմը:

EOT;

    /*
    *** START: FULL LICENSE ***

    Creative Commons Legal Code

    Attribution-ShareAlike 3.0 Unported


    CREATIVE COMMONS CORPORATION IS NOT A LAW FIRM AND DOES NOT PROVIDE
    LEGAL SERVICES. DISTRIBUTION OF THIS LICENSE DOES NOT CREATE AN
    ATTORNEY-CLIENT RELATIONSHIP. CREATIVE COMMONS PROVIDES THIS
    INFORMATION ON AN "AS-IS" BASIS. CREATIVE COMMONS MAKES NO WARRANTIES
    REGARDING THE INFORMATION PROVIDED, AND DISCLAIMS LIABILITY FOR
    DAMAGES RESULTING FROM ITS USE. License

    THE WORK (AS DEFINED BELOW) IS PROVIDED UNDER THE TERMS OF THIS
    CREATIVE COMMONS PUBLIC LICENSE ("CCPL" OR "LICENSE"). THE WORK IS
    PROTECTED BY COPYRIGHT AND/OR OTHER APPLICABLE LAW. ANY USE OF THE
    WORK OTHER THAN AS AUTHORIZED UNDER THIS LICENSE OR COPYRIGHT LAW IS
    PROHIBITED.

    BY EXERCISING ANY RIGHTS TO THE WORK PROVIDED HERE, YOU ACCEPT AND
    AGREE TO BE BOUND BY THE TERMS OF THIS LICENSE. TO THE EXTENT THIS
    LICENSE MAY BE CONSIDERED TO BE A CONTRACT, THE LICENSOR GRANTS YOU
    THE RIGHTS CONTAINED HERE IN CONSIDERATION OF YOUR ACCEPTANCE OF SUCH
    TERMS AND CONDITIONS.

    1. Definitions

    "Adaptation" means a work based upon the Work, or upon the Work and
    other pre-existing works, such as a translation, adaptation,
    derivative work, arrangement of music or other alterations of a
    literary or artistic work, or phonogram or performance and includes
    cinematographic adaptations or any other form in which the Work may be
    recast, transformed, or adapted including in any form recognizably
    derived from the original, except that a work that constitutes a
    Collection will not be considered an Adaptation for the purpose of
    this License. For the avoidance of doubt, where the Work is a musical
    work, performance or phonogram, the synchronization of the Work in
    timed-relation with a moving image ("synching") will be considered an
    Adaptation for the purpose of this License. "Collection" means a
    collection of literary or artistic works, such as encyclopedias and
    anthologies, or performances, phonograms or broadcasts, or other works
    or subject matter other than works listed in Section 1(f) below,
    which, by reason of the selection and arrangement of their contents,
    constitute intellectual creations, in which the Work is included in
    its entirety in unmodified form along with one or more other
    contributions, each constituting separate and independent works in
    themselves, which together are assembled into a collective whole. A
    work that constitutes a Collection will not be considered an
    Adaptation (as defined below) for the purposes of this License.
    "Creative Commons Compatible License" means a license that is listed
    at http://creativecommons.org/compatiblelicenses that has been
    approved by Creative Commons as being essentially equivalent to this
    License, including, at a minimum, because that license: (i) contains
    terms that have the same purpose, meaning and effect as the License
    Elements of this License; and, (ii) explicitly permits the relicensing
    of adaptations of works made available under that license under this
    License or a Creative Commons jurisdiction license with the same
    License Elements as this License. "Distribute" means to make available
    to the public the original and copies of the Work or Adaptation, as
    appropriate, through sale or other transfer of ownership. "License
    Elements" means the following high-level license attributes as
    selected by Licensor and indicated in the title of this License:
    Attribution, ShareAlike. "Licensor" means the individual, individuals,
    entity or entities that offer(s) the Work under the terms of this
    License. "Original Author" means, in the case of a literary or
    artistic work, the individual, individuals, entity or entities who
    created the Work or if no individual or entity can be identified, the
    publisher; and in addition (i) in the case of a performance the
    actors, singers, musicians, dancers, and other persons who act, sing,
    deliver, declaim, play in, interpret or otherwise perform literary or
    artistic works or expressions of folklore; (ii) in the case of a
    phonogram the producer being the person or legal entity who first
    fixes the sounds of a performance or other sounds; and, (iii) in the
    case of broadcasts, the organization that transmits the broadcast.
    "Work" means the literary and/or artistic work offered under the terms
    of this License including without limitation any production in the
    literary, scientific and artistic domain, whatever may be the mode or
    form of its expression including digital form, such as a book,
    pamphlet and other writing; a lecture, address, sermon or other work
    of the same nature; a dramatic or dramatico-musical work; a
    choreographic work or entertainment in dumb show; a musical
    composition with or without words; a cinematographic work to which are
    assimilated works expressed by a process analogous to cinematography;
    a work of drawing, painting, architecture, sculpture, engraving or
    lithography; a photographic work to which are assimilated works
    expressed by a process analogous to photography; a work of applied
    art; an illustration, map, plan, sketch or three-dimensional work
    relative to geography, topography, architecture or science; a
    performance; a broadcast; a phonogram; a compilation of data to the
    extent it is protected as a copyrightable work; or a work performed by
    a variety or circus performer to the extent it is not otherwise
    considered a literary or artistic work. "You" means an individual or
    entity exercising rights under this License who has not previously
    violated the terms of this License with respect to the Work, or who
    has received express permission from the Licensor to exercise rights
    under this License despite a previous violation. "Publicly Perform"
    means to perform public recitations of the Work and to communicate to
    the public those public recitations, by any means or process,
    including by wire or wireless means or public digital performances; to
    make available to the public Works in such a way that members of the
    public may access these Works from a place and at a place individually
    chosen by them; to perform the Work to the public by any means or
    process and the communication to the public of the performances of the
    Work, including by public digital performance; to broadcast and
    rebroadcast the Work by any means including signs, sounds or images.
    "Reproduce" means to make copies of the Work by any means including
    without limitation by sound or visual recordings and the right of
    fixation and reproducing fixations of the Work, including storage of a
    protected performance or phonogram in digital form or other electronic
    medium. 2. Fair Dealing Rights. Nothing in this License is intended to
    reduce, limit, or restrict any uses free from copyright or rights
    arising from limitations or exceptions that are provided for in
    connection with the copyright protection under copyright law or other
    applicable laws.

    3. License Grant. Subject to the terms and conditions of this License,
    Licensor hereby grants You a worldwide, royalty-free, non-exclusive,
    perpetual (for the duration of the applicable copyright) license to
    exercise the rights in the Work as stated below:

    to Reproduce the Work, to incorporate the Work into one or more
    Collections, and to Reproduce the Work as incorporated in the
    Collections; to create and Reproduce Adaptations provided that any
    such Adaptation, including any translation in any medium, takes
    reasonable steps to clearly label, demarcate or otherwise identify
    that changes were made to the original Work. For example, a
    translation could be marked "The original work was translated from
    English to Spanish," or a modification could indicate "The original
    work has been modified."; to Distribute and Publicly Perform the Work
    including as incorporated in Collections; and, to Distribute and
    Publicly Perform Adaptations. For the avoidance of doubt:

    Non-waivable Compulsory License Schemes. In those jurisdictions in
    which the right to collect royalties through any statutory or
    compulsory licensing scheme cannot be waived, the Licensor reserves
    the exclusive right to collect such royalties for any exercise by You
    of the rights granted under this License; Waivable Compulsory License
    Schemes. In those jurisdictions in which the right to collect
    royalties through any statutory or compulsory licensing scheme can be
    waived, the Licensor waives the exclusive right to collect such
    royalties for any exercise by You of the rights granted under this
    License; and, Voluntary License Schemes. The Licensor waives the right
    to collect royalties, whether individually or, in the event that the
    Licensor is a member of a collecting society that administers
    voluntary licensing schemes, via that society, from any exercise by
    You of the rights granted under this License. The above rights may be
    exercised in all media and formats whether now known or hereafter
    devised. The above rights include the right to make such modifications
    as are technically necessary to exercise the rights in other media and
    formats. Subject to Section 8(f), all rights not expressly granted by
    Licensor are hereby reserved.

    4. Restrictions. The license granted in Section 3 above is expressly
    made subject to and limited by the following restrictions:

    You may Distribute or Publicly Perform the Work only under the terms
    of this License. You must include a copy of, or the Uniform Resource
    Identifier (URI) for, this License with every copy of the Work You
    Distribute or Publicly Perform. You may not offer or impose any terms
    on the Work that restrict the terms of this License or the ability of
    the recipient of the Work to exercise the rights granted to that
    recipient under the terms of the License. You may not sublicense the
    Work. You must keep intact all notices that refer to this License and
    to the disclaimer of warranties with every copy of the Work You
    Distribute or Publicly Perform. When You Distribute or Publicly
    Perform the Work, You may not impose any effective technological
    measures on the Work that restrict the ability of a recipient of the
    Work from You to exercise the rights granted to that recipient under
    the terms of the License. This Section 4(a) applies to the Work as
    incorporated in a Collection, but this does not require the Collection
    apart from the Work itself to be made subject to the terms of this
    License. If You create a Collection, upon notice from any Licensor You
    must, to the extent practicable, remove from the Collection any credit
    as required by Section 4(c), as requested. If You create an
    Adaptation, upon notice from any Licensor You must, to the extent
    practicable, remove from the Adaptation any credit as required by
    Section 4(c), as requested. You may Distribute or Publicly Perform an
    Adaptation only under the terms of: (i) this License; (ii) a later
    version of this License with the same License Elements as this
    License; (iii) a Creative Commons jurisdiction license (either this or
    a later license version) that contains the same License Elements as
    this License (e.g., Attribution-ShareAlike 3.0 US)); (iv) a Creative
    Commons Compatible License. If you license the Adaptation under one of
    the licenses mentioned in (iv), you must comply with the terms of that
    license. If you license the Adaptation under the terms of any of the
    licenses mentioned in (i), (ii) or (iii) (the "Applicable License"),
    you must comply with the terms of the Applicable License generally and
    the following provisions: (I) You must include a copy of, or the URI
    for, the Applicable License with every copy of each Adaptation You
    Distribute or Publicly Perform; (II) You may not offer or impose any
    terms on the Adaptation that restrict the terms of the Applicable
    License or the ability of the recipient of the Adaptation to exercise
    the rights granted to that recipient under the terms of the Applicable
    License; (III) You must keep intact all notices that refer to the
    Applicable License and to the disclaimer of warranties with every copy
    of the Work as included in the Adaptation You Distribute or Publicly
    Perform; (IV) when You Distribute or Publicly Perform the Adaptation,
    You may not impose any effective technological measures on the
    Adaptation that restrict the ability of a recipient of the Adaptation
    from You to exercise the rights granted to that recipient under the
    terms of the Applicable License. This Section 4(b) applies to the
    Adaptation as incorporated in a Collection, but this does not require
    the Collection apart from the Adaptation itself to be made subject to
    the terms of the Applicable License. If You Distribute, or Publicly
    Perform the Work or any Adaptations or Collections, You must, unless a
    request has been made pursuant to Section 4(a), keep intact all
    copyright notices for the Work and provide, reasonable to the medium
    or means You are utilizing: (i) the name of the Original Author (or
    pseudonym, if applicable) if supplied, and/or if the Original Author
    and/or Licensor designate another party or parties (e.g., a sponsor
    institute, publishing entity, journal) for attribution ("Attribution
    Parties") in Licensor's copyright notice, terms of service or by other
    reasonable means, the name of such party or parties; (ii) the title of
    the Work if supplied; (iii) to the extent reasonably practicable, the
    URI, if any, that Licensor specifies to be associated with the Work,
    unless such URI does not refer to the copyright notice or licensing
    information for the Work; and (iv) , consistent with Ssection 3(b), in
    the case of an Adaptation, a credit identifying the use of the Work in
    the Adaptation (e.g., "French translation of the Work by Original
    Author," or "Screenplay based on original Work by Original Author").
    The credit required by this Section 4(c) may be implemented in any
    reasonable manner; provided, however, that in the case of a Adaptation
    or Collection, at a minimum such credit will appear, if a credit for
    all contributing authors of the Adaptation or Collection appears, then
    as part of these credits and in a manner at least as prominent as the
    credits for the other contributing authors. For the avoidance of
    doubt, You may only use the credit required by this Section for the
    purpose of attribution in the manner set out above and, by exercising
    Your rights under this License, You may not implicitly or explicitly
    assert or imply any connection with, sponsorship or endorsement by the
    Original Author, Licensor and/or Attribution Parties, as appropriate,
    of You or Your use of the Work, without the separate, express prior
    written permission of the Original Author, Licensor and/or Attribution
    Parties. Except as otherwise agreed in writing by the Licensor or as
    may be otherwise permitted by applicable law, if You Reproduce,
    Distribute or Publicly Perform the Work either by itself or as part of
    any Adaptations or Collections, You must not distort, mutilate, modify
    or take other derogatory action in relation to the Work which would be
    prejudicial to the Original Author's honor or reputation. Licensor
    agrees that in those jurisdictions (e.g. Japan), in which any exercise
    of the right granted in Section 3(b) of this License (the right to
    make Adaptations) would be deemed to be a distortion, mutilation,
    modification or other derogatory action prejudicial to the Original
    Author's honor and reputation, the Licensor will waive or not assert,
    as appropriate, this Section, to the fullest extent permitted by the
    applicable national law, to enable You to reasonably exercise Your
    right under Section 3(b) of this License (right to make Adaptations)
    but not otherwise. 5. Representations, Warranties and Disclaimer

    UNLESS OTHERWISE MUTUALLY AGREED TO BY THE PARTIES IN WRITING,
    LICENSOR OFFERS THE WORK AS-IS AND MAKES NO REPRESENTATIONS OR
    WARRANTIES OF ANY KIND CONCERNING THE WORK, EXPRESS, IMPLIED,
    STATUTORY OR OTHERWISE, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF
    TITLE, MERCHANTIBILITY, FITNESS FOR A PARTICULAR PURPOSE,
    NONINFRINGEMENT, OR THE ABSENCE OF LATENT OR OTHER DEFECTS, ACCURACY,
    OR THE PRESENCE OF ABSENCE OF ERRORS, WHETHER OR NOT DISCOVERABLE.
    SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES,
    SO SUCH EXCLUSION MAY NOT APPLY TO YOU.

    6. Limitation on Liability. EXCEPT TO THE EXTENT REQUIRED BY
    APPLICABLE LAW, IN NO EVENT WILL LICENSOR BE LIABLE TO YOU ON ANY
    LEGAL THEORY FOR ANY SPECIAL, INCIDENTAL, CONSEQUENTIAL, PUNITIVE OR
    EXEMPLARY DAMAGES ARISING OUT OF THIS LICENSE OR THE USE OF THE WORK,
    EVEN IF LICENSOR HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.

    7. Termination

    This License and the rights granted hereunder will terminate
    automatically upon any breach by You of the terms of this License.
    Individuals or entities who have received Adaptations or Collections
    from You under this License, however, will not have their licenses
    terminated provided such individuals or entities remain in full
    compliance with those licenses. Sections 1, 2, 5, 6, 7, and 8 will
    survive any termination of this License. Subject to the above terms
    and conditions, the license granted here is perpetual (for the
    duration of the applicable copyright in the Work). Notwithstanding the
    above, Licensor reserves the right to release the Work under different
    license terms or to stop distributing the Work at any time; provided,
    however that any such election will not serve to withdraw this License
    (or any other license that has been, or is required to be, granted
    under the terms of this License), and this License will continue in
    full force and effect unless terminated as stated above. 8.
    Miscellaneous

    Each time You Distribute or Publicly Perform the Work or a Collection,
    the Licensor offers to the recipient a license to the Work on the same
    terms and conditions as the license granted to You under this License.
    Each time You Distribute or Publicly Perform an Adaptation, Licensor
    offers to the recipient a license to the original Work on the same
    terms and conditions as the license granted to You under this License.
    If any provision of this License is invalid or unenforceable under
    applicable law, it shall not affect the validity or enforceability of
    the remainder of the terms of this License, and without further action
    by the parties to this agreement, such provision shall be reformed to
    the minimum extent necessary to make such provision valid and
    enforceable. No term or provision of this License shall be deemed
    waived and no breach consented to unless such waiver or consent shall
    be in writing and signed by the party to be charged with such waiver
    or consent. This License constitutes the entire agreement between the
    parties with respect to the Work licensed here. There are no
    understandings, agreements or representations with respect to the Work
    not specified here. Licensor shall not be bound by any additional
    provisions that may appear in any communication from You. This License
    may not be modified without the mutual written agreement of the
    Licensor and You. The rights granted under, and the subject matter
    referenced, in this License were drafted utilizing the terminology of
    the Berne Convention for the Protection of Literary and Artistic Works
    (as amended on September 28, 1979), the Rome Convention of 1961, the
    WIPO Copyright Treaty of 1996, the WIPO Performances and Phonograms
    Treaty of 1996 and the Universal Copyright Convention (as revised on
    July 24, 1971). These rights and subject matter take effect in the
    relevant jurisdiction in which the License terms are sought to be
    enforced according to the corresponding provisions of the
    implementation of those treaty provisions in the applicable national
    law. If the standard suite of rights granted under applicable
    copyright law includes additional rights not granted under this
    License, such additional rights are deemed to be included in the
    License; this License is not intended to restrict the license of any
    rights under applicable law. Creative Commons Notice

    Creative Commons is not a party to this License, and makes no warranty
    whatsoever in connection with the Work. Creative Commons will not be
    liable to You or any party on any legal theory for any damages
    whatsoever, including without limitation any general, special,
    incidental or consequential damages arising in connection to this
    license. Notwithstanding the foregoing two (2) sentences, if Creative
    Commons has expressly identified itself as the Licensor hereunder, it
    shall have all rights and obligations of Licensor.

    Except for the limited purpose of indicating to the public that the
    Work is licensed under the CCPL, Creative Commons does not authorize
    the use by either party of the trademark "Creative Commons" or any
    related trademark or logo of Creative Commons without the prior
    written consent of Creative Commons. Any permitted use will be in
    compliance with Creative Commons' then-current trademark usage
    guidelines, as may be published on its website or otherwise made
    available upon request from time to time. For the avoidance of doubt,
    this trademark restriction does not form part of the License.

    Creative Commons may be contacted at http://creativecommons.org/.

    */
}
