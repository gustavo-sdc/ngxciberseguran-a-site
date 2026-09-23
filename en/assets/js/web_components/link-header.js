// Links Head
const favicon = document.querySelector('#favicon')
const styleMain = document.querySelector('#styleMain')
const styleCustom = document.querySelector('#styleCustom')

const logoQd7 = document.querySelectorAll('#logoQD7')

const iconDeepInspection = document.querySelector('#iconDeepInspection')
const iconAuthentication = document.querySelector('#iconAuthentication')
const iconCheck = document.querySelector('#iconCheck')
const iconWan = document.querySelector('#iconWan')
const iconAnalyser = document.querySelector('#iconAnalyser')
const iconSase = document.querySelector('#iconSase')

const deepInspection = document.querySelectorAll('#deepInspection')
const authentication = document.querySelectorAll('#authentication')
const check = document.querySelectorAll('#check')
const wan = document.querySelectorAll('#wan')
const analyser = document.querySelectorAll('#analyser')
const sase = document.querySelectorAll('#sase')

const home = document.querySelectorAll('#home')
const sobre = document.querySelectorAll('#sobre')
const news = document.querySelectorAll('#news')
const translate = document.querySelectorAll('#translate')
const contato = document.querySelectorAll('#contato')
//const fortinet = document.querySelectorAll('#fortinet')

const linkWhatsApp = document.querySelectorAll('#linkApiWhatsApp')
const linkInstagram = document.querySelectorAll('#linkInstagram')

const defPage = document.querySelector('#defPage')

const linkBase = 'https://qd7.com.br/en'
const page = defPage.getAttribute('page')


const links = {
    linkLogo: 'https://qd7.com.br/assets/img/logo-qd7.png',
    iconAnalyser: linkBase+'/assets/img/icons/CgEye.png',
    iconAuthentication: linkBase+'/assets/img/icons/AiOutlineUnlock.png',
    iconCheck: linkBase+'/assets/img/icons/CgSearchFound.png',
    iconDeepInspection: linkBase+'/assets/img/icons/AiOutlineSchedule.png',
    iconSase: linkBase+'/assets/img/icons/CgListTree.png',
    iconWan: linkBase+'/assets/img/icons/CgMediaPodcast.png',

    home: linkBase+'',
    sobre: linkBase+'/#sobre',
    news: 'https://blog.qd7.com.br',
    contato: linkBase+'/#contato',
    fortinet: linkBase+'/fortinet/',

    deepInspection: linkBase+'/deep-inspection/',
    authentication: linkBase+'/authentication/',
    analyser: linkBase+'/analyser-360/',
    check: linkBase+'/check/',
    wan: linkBase+'/wan/',
    sase: linkBase+'/sase+/',

    whatsapp: 'https://api.whatsapp.com/send?phone=5517997914198&text=Time%20qd7%20agradece%20o%20seu%20contato,%20em%20breve%20retornaremos%20sua%20mensagem',
    instagram: 'https://www.instagram.com/qd7.cybersecurity',


    translate: `https://qd7.com.br${page}`
}

console.log(links.analyser)

logoQd7.forEach((element) => element.setAttribute('src', `${links.linkLogo}`))


home.forEach((e)=> e.setAttribute('href', `${links.home}`))
sobre.forEach((e)=> e.setAttribute('href', `${links.sobre}`))
news.forEach((e)=> e.setAttribute('href', `${links.news}`))
translate.forEach((e)=> e.setAttribute('href', `${links.translate}`))
contato.forEach((e)=> e.setAttribute('href', `${links.contato}`))
fortinet.forEach((e)=> e.setAttribute('href', `${links.fortinet}`))


iconAnalyser.setAttribute('src', `${links.iconAnalyser}`)
iconAuthentication.setAttribute('src', `${links.iconAuthentication}`)
iconCheck.setAttribute('src', `${links.iconCheck}`)
iconDeepInspection.setAttribute('src', `${links.iconDeepInspection}`)
iconSase.setAttribute('src', `${links.iconDeepInspection}`)
iconWan.setAttribute('src', `${links.iconWan}`)

analyser.forEach((e)=> e.setAttribute('href', `${links.analyser}`))
authentication.forEach((e)=> e.setAttribute('href', `${links.authentication}`))
check.forEach((e)=> e.setAttribute('href', `${links.check}`))
deepInspection.forEach((e)=> e.setAttribute('href', `${links.deepInspection}`))
sase.forEach((e)=> e.setAttribute('href', `${links.sase}`))
wan.forEach((e)=> e.setAttribute('href', `${links.wan}`))


// Função teste
function changeLink(name){
    this.forEach((e)=> e.setAttribute('href', `${links`.${name}`}`))
}