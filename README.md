# Unstable Systems Pokémon Centre

Welcome to the Unstable Systems Pokémon Centre! We offer the following services:

## Legendary lookup

A basic HTTP endpoint usable with Nightbot's urlfetch that lets you look up a
pokémon to check whether it's legendary or not. You can set up Nightbot to use
it by this as a chat message:

```
!addcom !legendary $(urlfetch https://pkmn.unstable.systems/legendary.php?pkmn=$(querystring)&user=$(user))
```

Feel free to name the command whatever you like (`!legendary` in this example)
and to leave out the user parameter if you don't want to ping users in reply.

## Services not offered

We can't heal your pokémon, unfortunately.