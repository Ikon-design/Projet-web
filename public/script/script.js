let selectedOption = document.getElementById("selectCharacter")
let selectSkill = document.getElementById('selectSkill')
let video = document.getElementById('Video')
let skill = document.getElementById('skill')
let description = document.getElementById('description')
let skillIcon = document.getElementById('skillIcon')

video.children[0].src = localStorage.getItem(0)
video.load();
video.play();

description.innerHTML = sessionStorage.getItem(0)
skillIcon.src = sessionStorage.getItem('skillIcon0')

if ( sessionStorage.getItem('selectedCharacter') === null){
    sessionStorage.setItem('selectedCharacter', selectedOption = 1)
} else {
    selectedOption.options[sessionStorage.getItem('selectedCharacter')].defaultSelected = true
}

if ( sessionStorage.getItem('selectSkill') === null){
    sessionStorage.setItem('selectSkill', 0)
} else {
    selectSkill.options[sessionStorage.getItem('selectSkill')].defaultSelected = true
}

function setUrl(){
    selectedOption = document.getElementById("selectCharacter").options.selectedIndex
    history.replaceState({},'', selectedOption + 1)
    sessionStorage.setItem('selectedCharacter', selectedOption)
    sessionStorage.setItem('selectSkill', 0)
    location.reload()
}

function setSkill()
{
    selectSkill = document.getElementById("selectSkill").value
    localStorage.setItem('selectSkill', selectSkill)
    sessionStorage.setItem('selectDescription', selectSkill)

    video.children[0].src = localStorage.getItem(selectSkill)
    video.load();
    video.play();

    description.innerHTML = sessionStorage.getItem(selectSkill)
    skillIcon.src = sessionStorage.getItem('skillIcon'+selectSkill)
}

function editUser($id)
{
    let dialog = document.getElementById("edit-dialog" + $id)
    dialog.open = true
}

function ChangeInformation()
{
    let dialog = document.getElementById('ChangeInformation')
    dialog.open = true
}

function cancelChange()
{
    dialog.open = false
}