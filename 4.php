<?php 
    string input = "assfddssgddhsdg";
    map<character, integer> map = new HashMap<>();

    for (int i=0; i < input.length(); ++i){
        integer count = map.get(input.charAt(i));
        map.put(input.charAt(i), count == null ? 1 : count + 1);
    }

    map.entrySet().stream()
        .filter(entry -> entry.getValue() > 1)
        .forEach(System.out::println);
?>