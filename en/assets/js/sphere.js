const myTags = [
    'JavaScript', 'CSS', 'HTML5',
    'PhotoShop', 'Illustrate', 'PHP',
    'Figma', 'Oracle SQL', 'UI / UX',
    'BASH', 'IDA',
];

var tagCloud = TagCloud('.content', myTags,{

  // radius in px
  radius: 450,

  // animation speed
  // slow, normal, fast
  maxSpeed: 'normal',
  initSpeed: 'fast',

  // 0 = top
  // 90 = left
  // 135 = right-bottom
  direction: 100,
  
  // interact with cursor move on mouse out
  keep: true
  
});

