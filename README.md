# Calculate the distance in miles between two latitude, longitude pairs

```php
$london    = [51.5285582, -0.2416797];
$hong_kong = [22.3526738, 113.9876161];

$miles      = geo_distance($london[0], $london[1], $hong_kong[0], $hong_kong[1]);
// 5974.0191893943

$kilometres = $miles * 1.609344;
// 9614.2519383366
```
