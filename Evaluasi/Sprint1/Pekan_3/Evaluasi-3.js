// Soal 1
for (let y = 1; y < 10; y++) {
    for (let x = 1; x < 10; x++) {
        if (x == y || x == 5) {
            document.write(' ', y + y - 1)
        } else if (x + y == 10 || y == 5) {
            document.write(' ', x + x - 2)
        } else {
            document.write(" ~ ")
        }

    }
    document.write('<br>')
} document.write('<br>')

// Soal 2
for (let y = 1; y < 10; y++) {
    for (let x = 1; x < 10; x++) {
        if (x <= y) {
            document.write(' ', x + x - 1)
        } else {
            document.write(" ~ ")
        }

    }
    document.write('<br>')
} document.write('<br>')

// Soal 3
for (let y = 1; y < 10; y++) {
    for (let x = 1; x < 10; x++) {
        if (x + y >= 10) {
            document.write(' ', 18 - (y + y))
        } else {
            document.write(" ~ ")
        }

    }
    document.write('<br>')
} document.write('<br>')

// Soal 4
for (let y = 1; y < 10; y++) {
    for (let x = 1; x < 10; x++) {
        if (x == y) {
            document.write(' ', x + x - 1)
        } else if (x + y == 10) {
            document.write(x + x - 2)
        } else if (x <= y && x + y >= 10) {
            document.write(" B ")
        } else if (x >= y && x + y <= 10) {
            document.write(" A ")
        } else {
            document.write(" ~ ")
        }

    }
    document.write('<br>')
} document.write('<br>')

// Soal 5
for (let y = 1; y < 10; y++) {
    for (let x = 1; x < 10; x++) {
        if (x == y) {
            document.write(' ', x + x - 1)
        } else if (x + y == 10) {
            document.write(x + x - 2)
        } else if (x <= y && x + y <= 10) {
            document.write(" A ")
        } else if (x >= y && x + y >= 10) {
            document.write(" B ")
        } else {
            document.write(" ~ ")
        }

    }
    document.write('<br>')
} document.write('<br>')