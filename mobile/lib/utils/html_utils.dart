/// Strips HTML and returns plain text for display (e.g. article descriptions).
/// Handles malformed HTML and Word/Office exports that may show raw tags/attributes.
String stripHtmlToPlain(String html) {
  if (html.isEmpty) return '';

  // 1. Decode HTML entities first (handles double-encoded content)
  String text = html
      .replaceAll('&nbsp;', ' ')
      .replaceAll('&amp;', '&')
      .replaceAll('&lt;', '<')
      .replaceAll('&gt;', '>')
      .replaceAll('&quot;', '"')
      .replaceAll('&#39;', "'")
      .replaceAll(RegExp(r'&#\d+;'), ' ');

  // 2. Remove all HTML tags
  text = text.replaceAll(RegExp(r'<[^>]*>'), ' ');

  // 3. Remove leftover HTML attribute fragments
  final attrPattern = RegExp(
    r'''\b(class|style|dir|id|name|lang|align)\s*=\s*("[^"]*"|'[^']*')''',
    caseSensitive: false,
  );
  text = text.replaceAll(attrPattern, '');

  // 4. Remove CSS property fragments
  text = text.replaceAll(
    RegExp(
      r'\b(text-align|text-justify|line-height|direction|unicode-bidi|margin|padding|font-size|font-family|mso-[\w-]+)\s*:\s*[^;}"]+[;]?',
      caseSensitive: false,
    ),
    '',
  );

  // 5. Remove Word-specific class names
  text = text.replaceAll(RegExp(r'\b[Mm]so[\w-]*\b'), '');
  text = text.replaceAll(RegExp(r'\b(MsoNormal|MsoListParagraph)\b', caseSensitive: false), '');

  // 6. Collapse whitespace and trim
  return text.replaceAll(RegExp(r'\s+'), ' ').trim();
}
