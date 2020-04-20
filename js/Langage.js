var language = localStorage.getItem("language");

if (language == "Ar") {
  var lang = {
    lang: "images/en.png",

    connect: "تواصل",
    us: "معنا",
    previousWorks: "سابقات الأعمال",
    features: "مميزات",
    services: "الخدمات",
    home: "الرئيسية",
    address: "العنوان",
    addressDetails: "143 شارع المريوطية - برج سما سيتى - الهرم - الجيزة",
    enjoyCalm: "تمتع بالهدوء",
    enjoyCalmDetails1: `يعتبر اليو بي في سي upvc هو البديل الاكثر أنتشار لكلاً من
                    الخشب و الالومنيوم حيث يعتمد عليه أشهر مصممي الديكور في
                    العالم و كل محبي الرقي حيث انه يوفر في التكلفة بنسبة كبيرة
                    مقارنة بالخشب و الالومنيوم حيث يتمتع الشبابيك و الابواب
                    المصنعة من مادة اليو بي في سي بضمان يصل إلي 10 سنوات على كل
                    الوحدات وهو من أكثر العناصر التى تميز تلك الصناعة. ويوفر
                    أيضا لهم تعدد الأشكال و التصميمات المختلفة التى تعطي للمالك
                    الأحساس بالتنوع المختلف و هو ما يبحث عنه الملاك، حيث انه يتم
                    تدعيمه من الداخل بعناصر الحديد اللأزمة التى تعمل على زيادة
                    الصلابة و المتانة داخل الوحدات و التى تعمل ايضاً على حماية
                    الوحدات من الداخل، لذلك من المهم التاكد من وجود أجزاء الحديد
                    الصلب من داخل الوحدات. `,
    enjoyCalmDetails2: ` 
                أبواب وشبابيك البولي فينيل من ڤاليو مصر دلوقتي تقدر تحافظ
                    علي صحتك وصحة أولادك أيا كان مستوي التلوث بالخارج أفضل حماية
                    من الفيروسات والبكتيريا لأنها مش مصنوعة من المعدن زي
                    الالوميتال اللي بيسهل التصاق الميكروبات بيه.
                  `,
    services1: " تركيب النوافذ",
    services1Details: ` تقوم الشركه بتخصيص افضل المهندسون والفنيون فى تصميم الخاص بك
                    ومساعدتك فى تعين تصميم عالمي بمواصفات عالميه بشرط ان تكون
                    هذه الخامات من افضل اقطاعات العالميه ومستورده من فرنسا
                    وتركيا`,
    services2: " تركيب الأبواب",
    services2Details: ` نقدم وحدات أبواب و شبابيك الـ upvc بمواصفات عالمية معتمدة و
                    أسعار تنافسية على مستوى المشاريع و الأفراد.`,
    services3: "شيش الحماية",
    services3Details: `يستخدم الشيش الحماية لنفس اغراض الشيش العادي من عزل فعال ضد
        الغبار والاتربة و الامطار بالاضافة الى اضفاء مزيد من الحماية
        لمنزلك حيث انه مصنع من الالمونيوم عالى الكثافى والمتين جدا
        مما يجعله صعب الاختراق`,
    features1: "مقاوم للتأثيرات البيئية و المناخية",
    features1Details: ` عازل للمياه و الأمطار و عازل للرياح و العواصف و
                          الأتربة و يحمي من الأشعة فوق البنفسجية`,
    features2: "حماية عالية",
    features2Details: ` مقاوم للخدوش و الصدمات و يتميز بخاصية الاطفاء الذاتي و
                          غير موصل للكهرباء`,
    features3: " أقوى عازل للصوت",
    features3Details: `لاحتوائها علي غرف داخلية متعددة ولذلك هى عازلة جدا للازعاج والصوت بسبب عدم وجود فراغات واستخدام اللحام فى الزوايا والخامة نفسها لا تساعد في توصيل الصوت.`,
    phoneMail: "التليفون & البريد الالكتروني",
    visitUs: "زورنا",
    some: "بعض",
    textAlign: "right",
  };
} else {
  var lang = {
    lang: "images/ar.png",

    connect: "connect",
    us: "Us",
    previousWorks: "previous Works",
    features: "features",
    services: "services",
    home: "home",
    address: "address",
    addressDetails: "143 Mariouteya Street - Sama City Tower - Haram - Giza",
    enjoyCalm: "enjoy Calm",
    enjoyCalmDetails1: ` UPVC is the most popular alternative to both Wood and aluminum are where the most famous interior designers rely on  The world and all lovers of sophistication as it saves the cost in a big rate Compared to wood and aluminum, windows and doors have windows Manufactured from PVC material, with a warranty of 10 years each Units is one of the most distinctive elements of this industry. It provides Also they have a variety of shapes and designs that give to the owner The sense of diversity is what an angel is looking for, as it is done Reinforce it from the inside with the required iron elements that increase Hardness and durability inside the units, which also protect The units are inside, so it is important to check the presence of iron parts Steel inside the units .
                `,
    enjoyCalmDetails2: ` 
                  Polyvinyl doors and windows from Paleo Egypt Now you can maintain your health and the health of your children, regardless of the level of pollution abroad, the best protection from viruses and bacteria because they are not made of metal, such as alumetal, which facilitates the attachment of microbes to it.
                  `,
    services1: " Windows ",
    services1Details: `The company allocates the best engineers and technicians in your design and helps you set a global design with international specifications provided that these materials are from the best global sectors and imported from France and Turkey`,
    services2: "Doors",
    services2Details: `We offer upvc doors and windows units with certified international specifications and competitive prices at the level of projects and individuals.`,
    services3: "protection",
    services3Details: `The sheesh uses protection for the same purposes as the regular sheesh from effective insulation against dust, dust and rain in addition to adding more protection to your home as it is made of highly dense and very durable aluminum which makes it difficult to penetrate.`,
    features1: "Resistant to environmental and climatic influences",
    features1Details: `It insulates water and rain, wind and storms, and dust and protects against UV rays`,
    features2: "High protection",
    features2Details: `It is scratch and shock resistant and has the feature of self-extinguishing and non-conductive`,
    features3: "Stronger soundproofing",
    features3Details: `It contains multiple internal rooms and therefore it is very insulated for noise and noise due to the lack of voids and the use of welding in the corners and the material itself does not help in the delivery of sound.`,
    phoneMail: "Phone & Mail",
    visitUs: "Visit Us",
    some: "some",
    textAlign: "left",
  };
}
