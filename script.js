function zad(nr) {
    let butts = document.getElementById('butts'),
        frame = document.createElement("iframe"),
        butt = document.createElement("button")

    while (butts.hasChildNodes()) butts.removeChild(butts.firstChild)

    frame.setAttribute('src', `zad${nr}.php`)
    frame.style = "width:100%;height:750px"
    frame.setAttribute('id', 'frame')
    document.body.appendChild(frame)

    butt.innerHTML = "Powrót"
    butt.setAttribute('onclick', "back()")
    butts.appendChild(butt)
}
function back() {
    let butts = document.getElementById('butts'),
        frame = document.getElementById('frame'),
        butt1 = document.createElement("button"),
        butt2 = document.createElement("button"),
        butt3 = document.createElement("button"),
        butt4 = document.createElement("button")

    while (butts.hasChildNodes()) butts.removeChild(butts.firstChild)
    frame.remove()

    butt1.innerHTML = "Zadanie 1"
    butt1.setAttribute('onclick', "zad(1)")
    butt2.innerHTML = "Zadanie 2"
    butt2.setAttribute('onclick', "zad(2)")
    butt3.innerHTML = "Zadanie 3"
    butt3.setAttribute('onclick', "zad(3)")
    butt4.innerHTML = "Zadanie 4"
    butt4.setAttribute('onclick', "zad(4)")
    butts.appendChild(butt1)
    butts.appendChild(butt2)
    butts.appendChild(butt3)
    butts.appendChild(butt4)
}