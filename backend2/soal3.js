function isPalindrom(str) {
    if (str === reverseString(str)) {
        return true
    }

    return false
}

function reverseString(str) {
    let reversedString = ''
    for (let i = (str.length - 1); i >= 0; i--) {
        reversedString += str[i]
    }

    return reversedString
}

console.log(isPalindrom('agus'))
