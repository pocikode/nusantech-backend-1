function sort(input) {
    for (let i = 0; i < input.length; i++) {
        for (let j = 0; j < input.length; j++) {
            if (input[j] > input[j + 1]) {
                let tmp = input[j]
                input[j] = input[j + 1]
                input[j + 1] = tmp
            }
        }
    }

    let reverse = []
    for (let i = (input.length - 1); i >= 0; i--) {
        reverse.push(input[i])
    }

    console.log(input)
    console.log(reverse)
}

sort([9, 1, 3, 6, 4, 8, 5, 2, 7])
