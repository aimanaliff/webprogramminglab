var count = 10;

while (count <= 40) {
  if (count % 2 == 1) {
    console.log(count);
    count++;
  } else count++;
}

for (var i = 10; i <= 40; i += 1) {
  if (i % 2 !== 0) {
    console.log(i);
  }
}
