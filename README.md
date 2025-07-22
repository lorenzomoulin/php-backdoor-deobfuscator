# PHP Backdoor Deobfuscator

This tool was developed during a real-world incident response to **deobfuscate a PHP malware sample** that used an indexed array (`$O[...]`) to represent obfuscated characters.

The script decodes the obfuscation logic and restores the original malicious code to a human-readable format, allowing for further analysis.

---

## 💡 How it works

The obfuscated PHP malware stores characters in a variable like `$O[...]` using URL-encoded ASCII characters.  
This script:

1. Decodes the URL-encoded "alphabet".
2. Replaces all `$O[index]` instances with their corresponding decoded character.
3. Cleans up unnecessary PHP string concatenations (`". "`).
4. Outputs a deobfuscated PHP file.

---

## 🧪 Example

Obfuscated snippet:
```php
eval($O[0].$O[1].$O[2].$O[3]);
```

After running the script, it becomes something like:
```php
eval("hard");
```


---

## 🚀 Usage

1. Save your obfuscated PHP file as `beautiful.php` in the same directory.
2. Run the script using Python 3:

```bash
python3 deobfuscate.php.py
```

3. The output will be written to `deobfuscated.php`.

---

## 🛠 Requirements

- Python 3.x
- No external libraries required (uses `urllib.parse` and `re`)

---

## 📂 Files

| File | Description |
|------|-------------|
| `deobfuscator.py` | The deobfuscator script |
| `beautiful.php` | Input: obfuscated PHP backdoor |
| `deobfuscated.php` | Output: deobfuscated PHP code |

---

## 🎤 Background

This tool was originally created during a Red Team engagement where analyzing obfuscated web shells was necessary to identify attacker behavior.  
It was also featured in my talk at [BSides Vix 2025](#) on malware deobfuscation techniques.

---

## 📄 License

MIT License

---

## 🧑‍💻 Author

**Lorenzo Moulin**  
- [Medium](https://medium.com/@lorenzomoulin)  
- [LinkedIn](https://www.linkedin.com/in/lorenzo-guimar%C3%A3es-moulin-bb7676b2/)
